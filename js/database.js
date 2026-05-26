var db = null;
var memoriaPC = []; // Vetor temporário para o Google Chrome

function inicializarBancoDados() {
    // 1. SE ESTIVER NO CELULAR (APK): Usa o banco real do aplicativo
    if (window.cordova && window.sqlitePlugin) {
        console.log("Modo Mobile: Abrindo SQLite nativo...");
        db = window.sqlitePlugin.openDatabase({ name: 'loja_final.db', location: 'default' });

        db.transaction(function(tx) {
            tx.executeSql('CREATE TABLE IF NOT EXISTS produtos (id INTEGER PRIMARY KEY, nome TEXT, preco REAL, foto TEXT, sincronizado INTEGER DEFAULT 0)');
        });
    } 
    // 2. SE ESTIVER NO PC (Go Live): Usa o Banco Inteligente na Memória
    else {
        console.warn("Modo Navegador: Simulando o banco de dados na memória do PC.");
        
        db = {
            transaction: function(callback) {
                let tx = {
                    executeSql: function(query, params, success, error) {
                        // Se o sistema tentar SALVAR um produto
                        if (query.includes('INSERT')) {
                            memoriaPC.push({
                                id: params[0],
                                nome: params[1],
                                preco: params[2],
                                foto: params[3],
                                sincronizado: 0
                            });
                            if (success) success(tx, { rows: { length: 0 } });
                        } 
                        // Se o sistema tentar LER os produtos
                        else if (query.includes('SELECT')) {
                            let resultadoFalso = {
                                rows: {
                                    length: memoriaPC.length,
                                    item: function(i) { return memoriaPC[i]; }
                                }
                            };
                            if (success) success(tx, resultadoFalso);
                        } 
                        // Se o sistema tentar ATUALIZAR status de sincronização
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

// Verifica onde o app está a correr para iniciar da forma certa
if (navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry|IEMobile)/)) {
    document.addEventListener("deviceready", inicializarBancoDados, false);
} else {
    inicializarBancoDados();
}