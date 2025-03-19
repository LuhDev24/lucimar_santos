    document.addEventListener('DOMContentLoaded', () => {
        console.log('Documento carregado e pronto.');

        // Validação do formulário
        const form = document.querySelector('form');
        form.addEventListener('submit', (event) => {
            if (!validarFormulario()) {
                event.preventDefault();
                alert('Por favor, preencha todos os campos corretamente.');
            }
        });

        // Máscara de telefone
        const telefoneInput = document.getElementById('telefone');
        if (telefoneInput) {
            telefoneInput.addEventListener('input', (event) => {
                event.target.value = formatarTelefone(event.target.value);
            });
        }

        // Scroll suave
        const linksInternos = document.querySelectorAll('a[href^="#"]');
        linksInternos.forEach(link => {
            link.addEventListener('click', (event) => {
                event.preventDefault();
                const destino = document.querySelector(link.getAttribute('href'));
                destino.scrollIntoView({ behavior: 'smooth' });
            });
        });

        // Função de validação do formulário
        function validarFormulario() {
            const nome = document.getElementById('nome').value.trim();
            const telefone = document.getElementById('telefone').value.trim();
            const email = document.getElementById('email').value.trim();

            if (nome === '' || telefone === '' || email === '') {
                return false;
            }

            if (!validarEmail(email)) {
                alert('Por favor, insira um e-mail válido.');
                return false;
            }

            return true;
        }

        // Função para formatar o número de telefone
        function formatarTelefone(telefone) {
            telefone = telefone.replace(/\D/g, ''); // Remove todos os caracteres não numéricos
            telefone = telefone.replace(/^(\d{2})(\d)/g, '($1) $2'); // Adiciona parênteses em volta do DDD
            telefone = telefone.replace(/(\d)(\d{4})$/, '$1-$2'); // Adiciona hífen entre o quarto e o quinto dígitos
            return telefone;
        }

        // Função de validação de e-mail
        function validarEmail(email) {
            const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return regex.test(email);
        }
    });
