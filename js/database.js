// Variável global para armazenar a conexão do banco de dados
let db = null;

// Espera o Cordova inicializar completamente para abrir o banco de dados
document.addEventListener('deviceready', inicializarBancoDados, false);

function inicializarBancoDados() {
    // Abre ou cria o banco de dados local chamado 'app.db'
    db = window.sqlitePlugin.openDatabase({ name: 'app.db', location: 'default' });

    db.transaction(function(tx) {
        // Criando a Tabela de Clientes com o campo de pontos e o controle de sincronização
        tx.executeSql(`CREATE TABLE IF NOT EXISTS clientes (
            id INTEGER PRIMARY KEY, 
            nome TEXT, 
            email TEXT, 
            cpf TEXT, 
            pontos INTEGER DEFAULT 0,
            sincronizado INTEGER DEFAULT 0
        )`);

        // Criando a Tabela de Produtos
        tx.executeSql(`CREATE TABLE IF NOT EXISTS produtos (
            id INTEGER PRIMARY KEY, 
            nome TEXT, 
            preco REAL, 
            foto TEXT,
            sincronizado INTEGER DEFAULT 0
        )`);

        // Criando a Tabela de Vendas
        tx.executeSql(`CREATE TABLE IF NOT EXISTS vendas (
            id TEXT PRIMARY KEY, 
            data TEXT, 
            cliente TEXT, 
            itens TEXT, 
            total REAL,
            sincronizado INTEGER DEFAULT 0
        )`);

        // Criando a Tabela de Brindes (Fidelidade)
        tx.executeSql(`CREATE TABLE IF NOT EXISTS brindes (
            id INTEGER PRIMARY KEY, 
            nome TEXT, 
            custo INTEGER
        )`);

        // Criando a Tabela de Resgates Concluídos
        tx.executeSql(`CREATE TABLE IF NOT EXISTS resgates (
            id INTEGER PRIMARY KEY, 
            data TEXT, 
            cliente TEXT, 
            brinde TEXT, 
            custo INTEGER,
            sincronizado INTEGER DEFAULT 0
        )`);

        console.log("Todas as tabelas do SQLite foram criadas com sucesso!");
    }, function(error) {
        console.error("Erro ao criar as tabelas: " + error.message);
    });
}