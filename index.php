<?php
session_start();
if(!isset($_SESSION['session_username'])){
    header("location:login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/d91779f425.js" crossorigin="anonymous"></script>
    <title>RendyChristian</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet"> 
    <link rel="shortcut icon" href="logo.png">
    <script>
        alert('Welcome My website Rendy Christian');
        function pesan(){
            alert('Terimakasih Sudah berkunjung Ke Website RendyChristian');
        }
        function pesan1(){
            alert('Terimakasih sudah mengisi');
        }
    </script>
</head>
    <style>
    .tp{
        top: -400px;
    }
</style>
<body>
     <!--Navbar Start-->
     <nav class="p-4 bg-white shadow-lg md:flex md:items-center md:justify-between">
        <div class="flex justify-between items-center">
        <span class="text-3xl text-dark font-bold font-[cursive] cursor-pointer">
           Ren<span class="text-blue-500">Chris</span>
        </span>

        <span class="text-3xl cursor-pointer md:hidden block">
            <button onclick="Menu()">  <i class="fa-solid fa-bars bars" ></i></button>
            <button onclick="clsMenu()"><i class="fa-solid fa-xmark hidden cls mr-2"></i></button>
        </span>
        </div>

        <ul id="menu" class="md:flex md:items-center md:z-auto md:static absolute
         backdrop-blur-sm z-10 w-full shadow-lg left-0 md:shadow-none md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-100
        tp transition-all ease-in duration-200">
            <li class="mx-4 my-6 md:my-0">
                <a href="#home" class="text-xl  hover:text-blue-500 duration-500">Home</a>
            </li>
            <li class="mx-4 my-6 md:my-0">
                <a href="#about" class="text-xl hover:text-blue-500 duration-500">About</a>
            </li>
            <li class="mx-4 my-6 md:my-0">
                <a href="#portfolio" class="text-xl hover:text-blue-500 duration-500">Portfolio</a>
            </li>
            <li class="mx-4 my-6 md:my-0">
                <a href="#blog" class="text-xl hover:text-blue-500 duration-500">Blog</a>
            </li>
            <li class="mx-4 my-6 md:my-0">
                <a href="#contact" class="text-xl hover:text-blue-500 duration-500">Contact Us</a>
            </li>
            <li class="mx-4 my-6 md:my-0">
                <a href="logout.php" class="text-xl hover:text-blue-500 duration-500">Logout</a>
            </li>
        </ul>
     </nav>
    <!--Navbar Close-->
    <!-- Hero section start -->
    <section id="home" class="">
        <div class="container 2xl:p-[10px] ml-auto md:ml-auto">
            <div class="flex flex-wrap">
                <div class="w-full self-center mt-2 px-4 lg:w-1/2">
                   <span class="block font-bold text-slate-900 text-4xl mt-1
                         lg:text-4xl" data-aos="zoom-in-up" data-aos-duration="900">Rendy Christian </span></h1>
                    <h2 class="font-medium text-slate-500 text-lg mb-5  lg:text-2xl" data-aos="zoom-in-up" data-aos-duration="900">Penyanyi & Pemusik & Web Development </h2>
                    <p class="font-medium text-gray-500 mb-10 loading-relaxed" data-aos="zoom-in-up" data-aos-duration="900">Hanya kamu saja yang aku harapkan, Lantas mengapa
                       kamu mengabaikan nya?
                    </p>

                    <a href="#" class="text-base text-white font-semibold bg-blue-500 py-3 px-8
                     rounded-full hover:shadow-xl hover:opacity-90 transition duration-300
                     ease-in-out" onclick="pesan()"> Pesan </a>
                </div>
                <div class="w-full self-end px-4 lg:w-1/2">
                    <div class="relative mt-20 lg:mt-9 lg:right-0">
                        <img src="img1.png" data-aos="flip-left" data-aos-duration="900" alt="RendyChristian"
                         class="md:w-1/2 w-full mx-auto ">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero section end -->

    <!--About Start-->
    <section id="about" class="bg-gray-200 pt-36 pb-32">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-10 lg:w-1/2 ">
                    <h4 class="font-bold uppercase text-blue-500 text-lg" data-aos="fade-up" data-aos-anchor-placement="top-center"  data-aos-duration="900">Tentang Saya</h4>
                    <h2 class="font-bold text-dark text-3xl mt-2 mb-5 max-w-md lg:text-4xl" data-aos="fade-up" data-aos-anchor-placement="top-center"  data-aos-duration="900">Yuk, kita Ngoding Bareng</h2>
                    <p class="font-medium text-base text-gray-500 max-w-xl lg:text-lg" data-aos="fade-up" data-aos-anchor-placement="top-center"  data-aos-duration="1000">
                     Haii Para programmer disini gua pengen ngumpulin untuk para 
                     pecinta ngoding yang ingin tau atau belajar bersama-sama dengan gua 
                     bahkan kita bisa saling sharing soal pengalaman kalian di dunia IT,
                     Yukk yang mau ikut boleh Join bareng.</p>
                </div>
                <div class="w-full px-4 lg:w-1/2">
                    <h3 class="font-semibold text-dark text-2xl mb-4 lg:w-1/2" data-aos="fade-up" data-aos-anchor-placement="top-center"  data-aos-duration="900">Mari Berteman</h3>
                    <p class="font-medium text-base text-gray-500 mb-6 lg:text-lg" data-aos="fade-up" data-aos-anchor-placement="top-center"  data-aos-duration="1000">
                    Bagi Teman-teman yang ingin tau dengan sosial media gua kalian bisa 
                    follow instagram,atau facebook gua yang ada di bawah ini. dan 
                    ada konten musik gua di Channel Youtube yang gua udah taro disini.
                </p> 
                    <div class="flex items-center">
                        <a href="https://www.instagram.com/renchris_queen/" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-blue-500 hover:border-blue-500 hover:bg-blue-300" data-aos="flip-right" data-aos-duration="900" target="_blank"><i class="fa-brands fa-instagram "></i></a>
                        <a href="https://www.facebook.com/rendy.christian.7796/" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-blue-500 hover:border-blue-500 hover:bg-blue-300" data-aos="flip-right" data-aos-duration="900" target="_blank"><i class="fa-brands fa-facebook "></i></a>
                        <a href="https://www.youtube.com/channel/UC_qBKNGMK5n7Rlub_2E88MQ" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-blue-500 hover:border-blue-500 hover:bg-blue-300" data-aos="flip-right" data-aos-duration="900" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About End-->

    <!--Portfolio start-->
    <section id="portfolio" class="pt-36 pb-16 bg-blue-500">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-10">
                    <h4 class="font-semibold text=lg text-blue-500 mb-2">Portfolio</h4>
                    <h2 class="font-bold text-white text-3xl mb-4" data-aos="fade-up" data-aos-anchor-placement="top-center"  data-aos-duration="900">Project yang sudah dibuat</h2>
                    <p class="font-medium text-md text-gray-300" data-aos="fade-up" data-aos-anchor-placement="top-center"  data-aos-duration="900">
                     Ini adalah Kumpulan Project yang sudah pernah gua buat
                     entah itu dari project sendiri atau project dari tugas sekolah</p>
                </div>
            </div>
            <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12
            xl:mx-auto">
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <a href="https://ren12chris.github.io/" target=_blank>
                        <img src="imggallery.PNG" data-aos="fade-up-right" data-aos-duration="1000" alt="gallery" width="w-full">
                        </a>
                    </div>
                    <h3 class="font-semibold text-xl text-slate-100 mt-5 mb-3" data-aos="fade-up" data-aos-anchor-placement="top-center"  data-aos-duration="900">
                        Gallery</h3>
                    <p class="font-medium text-base text-gray-300" data-aos="fade-up" data-aos-anchor-placement="top-center"  data-aos-duration="1000">
                    Yang Pertama ini adalah website yang pertama gua publish
                    dan memang ide dari gua sendiri walau cuma iseng-iseng doang
                    buat web ini dan web ini masih dalam pengembangan. </p>
                </div>
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <a href="#">
                        <img src="imgpariwisata.jpg" data-aos="fade-up-left" data-aos-duration="1000" alt="gallery" width="w-full">
                        </a>
                    </div>
                    <h3 class="font-semibold text-xl text-slate-100 mt-5 mb-3" data-aos="fade-up" data-aos-anchor-placement="top-center"  data-aos-duration="900">
                        Pariwisata</h3>
                    <p class="font-medium text-base text-gray-300" data-aos="fade-up" data-aos-anchor-placement="top-center"  data-aos-duration="1000">
                    Dan yang ini Web gua buat karna memang tugas dari sekolah 
                    kita di kasih untuk membuat web Pariwisata dengan ide-ide masing-masing.</p>
                </div>
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <a href="http://akfarbhj.ac.id/public/index.html" target=_blank>
                        <img src="imgakfar.jpg" data-aos="fade-up" data-aos-duration="1000"  alt="gallery" width="w-full">
                        </a>
                    </div>
                    <h3 class="font-semibold text-xl text-slate-100 mt-5 mb-3" data-aos="fade-up" data-aos-anchor-placement="top-center"  data-aos-duration="900">
                        Web Akfar</h3>
                    <p class="font-medium text-base text-gray-300" data-aos="fade-up" data-aos-anchor-placement="top-center"  data-aos-duration="1000">
                     Web kita ini bukan Tugas dari sekolah tapi memang project dari luar 
                     dan ini dibuat oleh Tim RPL Bhumi Husada dan di projet ini gua mendapat 
                     bagian untuk membuat Gallery.</p>
                </div>

            </div>
        </div>
    </section>
    <!--Portfolio End-->
    <!--Blog Start-->
    <section id="blog" class="pt-36 pb-32 bg-slate-100">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-10">
                    <h4 class="font-semibold text=lg text-blue-500 mb-2">Blog</h4>
                    <h2 class="font-bold text-dark text-3xl mb-4">Tulisan terkini</h2>
                </div>
            </div>
            <div id="bahasa pemrograman" class="flex flex-wrap">
                <div class="w-full px-4 lg:w-1/2 xl:w-1/2">
                    <div class="bg-gray-400 rounded-xl shadow-lg overflow-hidden mb-10" data-aos="flip-left" data-aos-duration="900">
                        <img src="img2.jpg" alt="programing" class="w-full">
                        <div class="py-0 px-0">
                            <h3>
                               <a href="#" class="block mb-5 mt-2 ml-2 font-semibold text-xl 
                               text-blue-700 hover:text-blue-900" data-aos="fade-up" data-aos-anchor-placement="top-center"  data-aos-duration="900">Bahasa Pemograman apa yang saat ini saya gunakan?</a>
                            </h3>
                            <p class="font-medium ml-2 text-base text-white mb-6" data-aos="fade-up" data-aos-anchor-placement="top-center"  data-aos-duration="1000">
                             Bahasa Pemrograman yang saat ini saya gunakan adalah bahasa Pemrograman
                            yang umumnya digunakan untuk Website dan framework yang saya gunakan adalah
                            Bootstrap dan Tailwind CSS</p>
                             
                         </div>
                    </div>
                </div>
                <div id="tips belajar" class="w-full px-4 lg:w-1/2 xl:w-1/1">
                    <div class="bg-gray-400 rounded-xl shadow-lg overflow-hidden mb-10" data-aos="flip-right" data-aos-duration="900">
                        <img src="https://www.duniailkom.com/wp-content/uploads/2019/09/Ilustrasi-belajar-programming.jpg" alt="programing" class="w-full">
                        <div class="py-0 px-0">
                            <h3>
                               <a href="#" class="block mb-5 mt-2 ml-2 font-semibold text-xl 
                               text-blue-700 hover:text-blue-900">Bagaimana Belajar Otodidak untuk Programmer?</a>
                            </h3>
                            <p class="font-medium ml-2 text-base text-white mb-6 ">
                                Ada banyak cara untuk belajar programming. Kamu dapat mempelajarinya dengan mengambil 
                                mata kuliah dengan jurusan teknik informatika, mengambil kursus terkait, bahkan mempelajarinya secara otodidak. 
                                Kita akan membahas tips apa saja yang dapat kamu ikuti ketika ingin belajar programming secara otodidak. Berikut ini tipsnya:</p>
                             <a href="https://www.dicoding.com/blog/belajar-programming-secara-otodidak/" target="_blank" class="font-medium text-sm text-white bg-blue-500 py-2 px-4 rounded-lg hover:opacity-80">Baca Selengkapnya</a>
                         </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--Blog close-->
    <!--Contact Start-->
      <section id="contact" class="pt-36 pb-32">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-10">
                    <h4 class="font-bold text-3xl text-blue-500 mb-2">Contact Us</h4>
                </div>
            </div>
           <form>
            <div class="w-full lg:w-2/3 lg:mx-auto">
            <div class="w-full px-4 mb-8">
              <label for="name" class="text-base text-blue-500 text-bold">Nama</label>
              <input type="text" id="name" class="w-full bg-slate-200 text-dark p-3
               rounded-md focus:outline-none focus:ring-1 focus:border-blue-900">
            </div>
            <div class="w-full px-4 mb-8">
              <label for="email" class="text-base text-blue-500 text-bold">Email</label>
              <input type="email" id="email" class="w-full bg-slate-200 text-dark p-3
               rounded-md focus:outline-none focus:ring-1 focus:border-blue-900">
            </div>
            <div class="w-full px-4 mb-8">
              <label for="pesan" class="text-base text-blue-500 text-bold">Pesan</label>
              <textarea type="text" id="email" class="w-full h-40 bg-slate-200 text-dark p-3
               rounded-md focus:outline-none focus:ring-1 focus:border-blue-900"></textarea>
            </div>
            <div class="w-full px-4">
                <button class="text-base font-semibold text-white bg-blue-500
                py-3 px-8 rounded-full w-full hover:shadow-2xl transition duration-500" onclick="pesan1()">Kirim</button>
            </div>
            </div>
            </form>
        </div>
      </section>
    <!--Contact End-->

    <!--Footer Start-->
    <footer class="bg-blue-500 pt-24 pb-12">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-12 text-white font-medium md:w-1/3 xl:px-20">
                    <h2 class="font-bold text-4xl mb-5">RenChris</h2>
                    <h3 class="font-bold text-2xl mb-2">Contact Us</h3>
                    <p>rendychristian00@gmail.com</p>
                    <p>Jln.bungur Jakarta Timur</p>
                    <p>DKI Jakarta</p>
                </div>
                <div class="w-full px-4 mb-12 md:w-1/3">
                    <h3 class="font-semibold text-xl text-white mb:5">
                        Kategori Tulisan</h3>
                    <ul>
                        <li>
                            <a href="#bahasa pemrograman" class="inline-block text-base text-slate-300 hover:text-yellow-400 mb-2">Bahasa Pemrograman</a>
                        </li>
                        <li>
                            <a href="#tips belajar" class="inline-block text-base text-slate-300 hover:text-yellow-400">Tips belajar Otodidak untuk Programmer</a>
                        </li>
                    </ul>
                </div>
                <div class="w-full px-4 mb-12 md:w-1/3">
                    <h3 class="font-semibold text-xl text-white mb:5">
                        Tautan</h3>
                    <ul>
                        <li>
                            <a href="#home" class="inline-block text-base text-slate-300 hover:text-yellow-400 mb-2">Home</a>
                        </li>
                        <li>
                            <a href="#about" class="inline-block text-base text-slate-300 hover:text-yellow-400 mb-2">Tentang Saya</a>
                        </li>
                        <li>
                            <a href="#portfolio" class="inline-block text-base text-slate-300 hover:text-yellow-400 mb-2">Project</a>
                        </li>
                        <li>
                            <a href="#blog" class="inline-block text-base text-slate-300 hover:text-yellow-400 mb-2">Tulisan Terkini</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="w-full pt-10 border-t border-white-500">
                <div class="flex items-center justify-center mb-5">
                    <a href="https://www.instagram.com/renchris_queen/" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-blue-500 hover:border-blue-500 hover:bg-yellow-500" target="_blank"><i class="fa-brands fa-instagram text-slate-100 text-2xl"></i></a>
                    <a href="https://www.facebook.com/rendy.christian.7796/" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-blue-500 hover:border-blue-500 hover:bg-yellow-500" target="_blank"><i class="fa-brands fa-facebook text-slate-100 text-2xl"></i></a>
                    <a href="https://www.youtube.com/channel/UC_qBKNGMK5n7Rlub_2E88MQ" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-blue-500 hover:border-blue-500 hover:bg-yellow-500" target="_blank"><i class="fa-brands fa-youtube text-slate-100 text-2xl"></i></a>
                </div>
            </div>
            <p class="font-medium text-sm text-slate-300 text-center"> © Dibuat Oleh Rendy Christian</p>
        </div>
    </footer>
    <!--Footer End-->
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        const text = document.getElementById('menu');
        const bars = document.querySelector('.bars');
        const close = document.querySelector('.cls');
        function Menu() {
           bars.classList.add("hidden");
           close.classList.remove("hidden");
           text.classList.toggle("tp");
        }
        function clsMenu() {
           bars.classList.remove("hidden");
           close.classList.add("hidden");
           text.classList.toggle("tp");
        }
    </script>
</body>
</html>
