/**
 * Gerenciador de Autenticação (Login)
 * Prontificado para futura integração com a API/Banco de Dados
 */

document.addEventListener('DOMContentLoaded', () => {
    const formLogin = document.getElementById('formLogin');
    
    if (formLogin) {
        formLogin.addEventListener('submit', handleLoginSubmit);
    }
});

/**
 * Controla o envio do formulário de login
 */
function handleLoginSubmit(event) {
    const form = event.currentTarget;

    // Impede o redirecionamento imediato para podermos validar no JavaScript
    event.preventDefault();
    event.stopPropagation();

    // Ativa as classes visuais de erro/sucesso do Bootstrap
    form.classList.add('was-validated');

    // Se os campos passarem na validação básica (HTML5), prossegue
    if (form.checkValidity()) {
        const credenciais = obterCredenciais(form);
        
        console.log('Tentativa de login com:', { email: credenciais.email }); // Senha omitida no console por segurança
        
        autenticarUsuario(credenciais, form);
    }
}

/**
 * Coleta os dados de login informados pelo usuário
 */
function obterCredenciais(form) {
    const formData = new FormData(form);
    return {
        email: formData.get('email').trim(),
        senha: formData.get('senha')
    };
}

/**
 * Simula a verificação das credenciais.
 * Quando implementar o banco, você substituirá esta lógica por uma requisição ao seu PHP.
 */
function autenticarUsuario(credenciais, form) {
    const btnSubmit = form.querySelector('button[type="submit"]');
    const textoOriginal = btnSubmit.innerHTML;
    
    // Feedback visual de carregamento
    btnSubmit.disabled = true;
    btnSubmit.innerHTML = 'Autenticando...';

    // Simula o tempo de resposta do servidor (1.2 segundos)
    setTimeout(() => {
        
        // Exemplo de validação mockada (fictícia) no front apenas para testes:
        if (credenciais.email === "teste@admin.com" && credenciais.senha === "123456") {
            alert('Login realizado com sucesso!');
            // Redireciona para o painel principal configurado no 'action' do form
            window.location.href = form.getAttribute('action') || 'dashboard.php';
        } else {
            // Se falhar na simulação, reativa o botão e avisa o usuário
            alert('Credenciais simuladas incorretas! (Dica: use teste@admin.com e senha 123456 para testar o sucesso)');
            btnSubmit.disabled = false;
            btnSubmit.innerHTML = textoOriginal;
            form.classList.remove('was-validated');
        }

    }, 1200);
}