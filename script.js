/*document.addEventListener('DOMContentLoaded', function() {
    // Verifica se o cookie de recarregamento já foi definido
    const reloadCookie = document.cookie.replace(/(?:(?:^|.*;\s*)reload\s*\=\s*([^;]*).*$)|^.*$/, "$1");

    // Se o cookie de recarregamento não existir, recarrega a página e define o cookie
    if (!reloadCookie) {
        location.reload();
        document.cookie = "reload=true; path=/"; // Define o cookie com uma validade de sessão
    }
});*/




// Função para alterar o título
function changeTitle() {
    document.title = "Prismdium";
}

// Função para restaurar o título original
function restoreTitle() {
    document.title = "Volte aqui ;(";
}

// Adiciona um evento para quando a janela ganhar foco
window.addEventListener('focus', changeTitle);

// Adiciona um evento para quando a janela perder foco
window.addEventListener('blur', restoreTitle);


//recarrega a página
window.addEventListener('focus', function() {
    location.reload();
});



document.addEventListener("DOMContentLoaded", function() {
    const phrases = [
        "Explore o melhor dos jogos...",
        "Descubra novas aventuras...",
        "Conecte-se com outros jogadores  :)",
        "Desbrave novas terras..."
    ]; // Array contendo as frases para serem alternadas
    let currentPhraseIndex = 0; // Índice da frase atual
    const delay = 100; // Tempo de atraso entre cada caractere em milissegundos
    let shuffledPhrases = shuffleArray(phrases.slice()); // Array de frases embaralhadas

    // Função para embaralhar um array
    function shuffleArray(array) {
        for (let i = array.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            [array[i], array[j]] = [array[j], array[i]];
        }
        return array;
    }

    function typeWriter(text, i) {
        if (i < text.length) {
            document.querySelector('.texto__inicio').textContent += text.charAt(i);
            i++;
            setTimeout(() => {
                typeWriter(text, i);
            }, delay);
        }
    }

    function changePhrase() {
        // Limpa o conteúdo atual da '.texto__inicio'
        document.querySelector('.texto__inicio').textContent = '';
        // Verifica se todas as frases foram exibidas
        if (currentPhraseIndex >= shuffledPhrases.length) {
            // Embaralha as frases novamente
            shuffledPhrases = shuffleArray(phrases.slice());
            // Reinicia o índice da frase atual
            currentPhraseIndex = 0;
        }
        // Obtém a próxima frase do array embaralhado
        const nextPhrase = shuffledPhrases[currentPhraseIndex];
        // Atualiza o índice para a próxima frase
        currentPhraseIndex++;
        // Inicia a animação da próxima frase
        typeWriter(nextPhrase, 0);
    }

    // Inicia a animação com a primeira frase
    typeWriter(shuffledPhrases[currentPhraseIndex], 0);

    // Alterna entre as frases a cada 15 segundos
    setInterval(changePhrase, 15000);
});






document.addEventListener('DOMContentLoaded', function() {
    const navMenu = document.querySelector('.nav__menu');
    const hideNavButton = document.querySelector('.hide-nav-button');

    // Adiciona ouvinte de evento para clicar no botão de alternar menu
    hideNavButton.addEventListener('click', function() {
        navMenu.classList.toggle('hidden'); // Alterna a visibilidade do menu
    });

    // Adiciona ouvinte de evento para mouseout no menu de navegação
    navMenu.addEventListener('mouseout', function(event) {
        // Verifica se o evento de mouseout ocorreu fora do menu de navegação
        if (!navMenu.contains(event.relatedTarget)) {
            navMenu.classList.add('hidden'); // Oculta o menu se o mouse sair da área do menu
        }
    });
});



document.addEventListener('DOMContentLoaded', function() {
    const navMenu = document.querySelector('.nav__menu');
    const hideNavButton = document.querySelector('.hide-nav-button');

    // Adiciona ouvinte de evento para clicar no botão de alternar menu
    hideNavButton.addEventListener('click', function() {
        // Altera o estilo do menu para vazio ou block
        navMenu.style.display = navMenu.style.display === 'none' ? 'block' : 'none';
    });
}); 







document.addEventListener('DOMContentLoaded', function() {
    const hideNavButton = document.querySelector('.hide-nav-button');

    setInterval(function() {
        hideNavButton.style.transition = 'transform 1s ease'; // Adiciona uma transição suave de 1 segundo para a propriedade transform
        hideNavButton.style.transform = 'rotate(360deg)'; // Aplica uma rotação de 360 graus
        setTimeout(function() {
            hideNavButton.style.transform = 'rotate(0deg)'; // Retorna ao estado original
        }, 1000); // Após 1 segundo, retorna ao estado original
    }, 20000); // Executa a animação a cada 20 segundos
});



if (!localStorage.getItem('reloaded')) {
    // Marca a página como recarregada
    localStorage.setItem('reloaded', 'true');
    // Recarrega a página após 1 segundo
    setTimeout(function() {
        location.reload();
    }, 1000);
}