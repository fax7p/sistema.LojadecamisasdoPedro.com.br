var db = null;
var memoriaPC = [];

// Tenta puxar da memória, se der erro, cria uma nova
try {
    memoriaPC = JSON.parse(localStorage.getItem('mock_db_pc')) || [];
} catch(e) {}

function inicializarBancoDados() {
    // 1. SE ESTIVER NO CELULAR (APK): Usa o banco real (À prova de falhas)
    if (window.cordova && window.sqlitePlugin) {
        console.log("Modo Mobile: Abrindo SQLite nativo...");
        db = window.sqlitePlugin.openDatabase({ name: 'loja_final.db', location: 'default' });

        db.transaction(function(tx) {
            tx.executeSql('CREATE TABLE IF NOT EXISTS produtos (id INTEGER PRIMARY KEY, nome TEXT, preco REAL, foto TEXT, sincronizado INTEGER DEFAULT 0)');
        });
    } 
    // 2. SE ESTIVER NO PC: Usa a memória com proteção contra fotos grandes
    else {
        console.warn("Modo Navegador: Simulando banco persistente.");
        db = {
            transaction: function(callback) {
                let tx = {
                    executeSql: function(query, params, success, error) {
                        if (query.includes('INSERT')) {
                            memoriaPC.unshift({
                                id: params[0],
                                nome: params[1],
                                preco: params[2],
                                foto: params[3],
                                sincronizado: 0
                            });
                            
                            // Tenta salvar. Se a foto for muito grande, ele avisa mas não quebra o sistema!
                            try {
                                localStorage.setItem('mock_db_pc', JSON.stringify(memoriaPC));
                            } catch(e) {
                                console.warn("A foto era muito pesada para o Chrome, mas o produto foi salvo na RAM temporária.");
                            }
                            
                            if (success) success(tx, { rows: { length: 0 } });
                        } 
                        else if (query.includes('SELECT')) {
                            let resultadoFalso = {
                                rows: {
                                    length: memoriaPC.length,
                                    item: function(i) { return memoriaPC[i]; }
                                }
                            };
                            if (success) success(tx, resultadoFalso);
                        } 
                        else if (query.includes('UPDATE')) {
                            if (success) success(tx, { rows: { length: 0 } });
                        }
                    }
                };
                callback(tx);
            }
        };
    }
}

if (navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry|IEMobile)/)) {
    document.addEventListener("deviceready", inicializarBancoDados, false);
} else {
    inicializarBancoDados();
}