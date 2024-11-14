<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ask Anything</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-white text-gray-800 h-screen">

    <!-- Navbar -->
    <header class="flex justify-between items-center px-8 py-4 shadow-lg bg-gray-50 hover:shadow-2xl transition-shadow duration-300 ease-in-out">
        <!-- Logo -->
        <img src="images/logo2.png" alt="logo" class="h-10 w-auto">
        <nav class="space-x-6">
            <a href="#" class="text-gray-600 hover:text-purple-700 transition">Home</a>
            <a href="#about" class="text-gray-600 hover:text-purple-700 transition">Sobre Nós</a>
            <a href="#services" class="text-gray-600 hover:text-purple-700 transition">Serviços</a>
            <a href="#news" class="text-gray-600 hover:text-purple-700 transition">Notícias</a>
            <a href="#contact" class="text-gray-600 hover:text-purple-700 transition">Contato</a>
            <a href="#" class="text-gray-600 hover:text-purple-700 transition">Parceiros</a>
        </nav>
        <div>
            <button class="text-gray-600 hover:text-purple-700 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative bg-cover bg-center text-white text-center h-96 flex items-center justify-center"
        style="background-image: url('images/livraria.jpg');">
        <div class="bg-black opacity-40 absolute inset-0"></div> <!-- Sombreado de fundo para melhor legibilidade -->
        <div class="relative z-10">
            <h1 class="text-4xl font-bold mb-4">Pesquise sua monografia aqui</h1>
            <p class="text-lg mb-6">Encontre qualquer monografia que tenha sido escrita no curso de Pedagogia Unimontes!</p>
            <div class="flex justify-center">
                <input type="text"
                    class="px-4 py-2 border border-gray-300 rounded-full shadow-md w-2/3 sm:w-1/2 text-gray-800"
                    placeholder="Digite sua pergunta..." />
                <button
                    class="ml-4 px-5 py-2 bg-purple-700 text-white rounded-full shadow-md hover:bg-purple-800 transition">
                    → Perguntar
                </button>
            </div>
        </div>
    </section>

    <!-- Sobre Nós -->
    <section id="about" class="py-20 px-8 bg-gray-50">
        <div class="max-w-6xl mx-auto text-center">
            <h2 class="text-4xl font-semibold mb-4 text-purple-700">Sobre Nós</h2>
            <p class="text-lg text-gray-600">
                Somos uma plataforma dedicada a fornecer respostas rápidas e precisas utilizando IA para diversos
                temas, como monografias, projetos, artigos e muito mais. Nossa missão é facilitar o acesso ao conhecimento
                e aprimorar a interação com a tecnologia.
            </p>
        </div>
    </section>

    <!-- Serviços -->
    <section id="services" class="py-20 bg-white">
        <div class="max-w-6xl mx-auto text-center">
            <h2 class="text-4xl font-semibold mb-8 text-purple-700">Nossos Serviços</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-semibold text-gray-700 mb-4">Consultoria e Pesquisa</h3>
                    <p class="text-gray-600">Oferecemos consultoria em pesquisa acadêmica, ajudando você a desenvolver seu
                        projeto ou monografia.</p>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-semibold text-gray-700 mb-4">Desenvolvimento de Projetos</h3>
                    <p class="text-gray-600">Apoio no desenvolvimento de projetos inovadores em diversas áreas do
                        conhecimento.</p>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-semibold text-gray-700 mb-4">Apoio Acadêmico</h3>
                    <p class="text-gray-600">Ajuda na redação e revisão de monografias, artigos científicos e outros
                        trabalhos acadêmicos.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Notícias -->
    <section id="news" class="py-20 px-8 bg-gray-100">
        <div class="max-w-6xl mx-auto text-center">
            <h2 class="text-4xl font-semibold mb-4 text-purple-700">Últimas Notícias</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-semibold text-gray-700 mb-4">Lançamento de Novo Curso</h3>
                    <p class="text-gray-600">Estamos lançando um novo curso de desenvolvimento de projetos acadêmicos. Não
                        perca!</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-semibold text-gray-700 mb-4">Workshop de Pesquisa</h3>
                    <p class="text-gray-600">Participe do nosso workshop gratuito sobre métodos de pesquisa científica e
                        metodologia.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-semibold text-gray-700 mb-4">Nova Parceria com Instituições de Ensino</h3>
                    <p class="text-gray-600">Firmamos novas parcerias com universidades para oferecer melhores recursos aos
                        nossos usuários.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contato -->
    <section id="contact" class="py-20 px-8 bg-white">
        <div class="max-w-6xl mx-auto text-center">
            <h2 class="text-4xl font-semibold mb-8 text-purple-700">Contato</h2>
            <p class="text-lg text-gray-600 mb-4">Fale conosco para mais informações ou dúvidas. Estamos aqui para
                ajudar!</p>
            <form class="max-w-xl mx-auto">
                <input type="email" class="px-5 py-3 border border-gray-300 rounded-full shadow-md w-full mb-4"
                    placeholder="Seu e-mail" />
                <textarea class="px-5 py-3 border border-gray-300 rounded-lg shadow-md w-full mb-4" rows="4"
                    placeholder="Sua mensagem"></textarea>
                <button type="submit"
                    class="px-6 py-3 bg-purple-700 text-white rounded-full shadow-md hover:bg-purple-800 transition">
                    Enviar Mensagem
                </button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center py-6">
        <p class="text-lg">© 2024 Ask Anything. Todos os direitos reservados.</p>
        <div class="flex justify-center space-x-4 mt-4">
            <a href="#" class="text-white hover:text-purple-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2v4M4 12h4M12 22v-4M20 12h-4" />
                </svg>
            </a>
            <a href="#" class="text-white hover:text-purple-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </a>
        </div>
    </footer>

</body>

</html>
