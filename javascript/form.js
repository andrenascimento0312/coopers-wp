/**
 * Front-end JavaScript with form
 *
 * The JavaScript code you place here will be processed by esbuild. The output
 * file will be created at `../theme/js/form.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */

document.addEventListener('DOMContentLoaded', function() {
    // Aplica a máscara ao campo de telefone
    // lib é conhecida e está na rota /theme/lib/inputmask
    Inputmask('(99) 9999-9999').mask('#telephone');
});

document.querySelector('.contact-form').addEventListener('submit', async function (e) {
    e.preventDefault();

    document.querySelector('.contact-form button').classList.add('loading');
    document.querySelector('.contact-form button').textContent = 'Sending...';

    let name = document.querySelector('#name').value;
    let phone = document.querySelector('#telephone').value;
    let email = document.querySelector('#email').value;
    let message = document.querySelector('#message').value;

    let data = {
        name: name,
        email: email,
        phone: phone,
        message: message
    };

    try {
        const response = await fetch(`${wp_api_settings.rest_url}add/v1/leads`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-WP-Nonce': wp_api_settings.nonce
            },
            body: JSON.stringify(data)
        });

        if (!response.ok) {
            throw new Error('Erro ao enviar os dados');
        }

        const responseData = await response.json();
        console.log('Resposta recebida:', responseData);

        // exibe uma mensagem de sucesso
        document.querySelector('.contact-form').reset();
        document.querySelector('.contact-form button').textContent = 'SEND NOW';
        document.querySelector('.msg-success').textContent = responseData.message;

    } catch (error) {
        console.error('Erro ao enviar os dados:', error);
        // Trate o erro de acordo com sua lógica de aplicativo
    } finally {
        
        document.querySelector('.contact-form button').classList.remove('loading');
        document.querySelector('.msg-success').classList.remove('hidden');
    }
});
