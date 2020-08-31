<template>
    <div>
        <navbar-component></navbar-component>
        <demo></demo>
        <main>
            <div
                class="relative pt-16 pb-32 flex content-center items-center justify-center"
                style="min-height: 75vh;"
            >
                <div
                    class="absolute top-0 w-full h-full bg-center bg-cover background-covid"
                >
                    <span
                        id="blackOverlay"
                        class="w-full h-full absolute opacity-75 bg-gray-900"
                    ></span>
                </div>
                <div class="container relative mx-auto">
                    <div class="items-center flex flex-wrap">
                        <div
                            class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center"
                        >
                            <div class="px-auto">
                                <div
                                    class="animated fadeInDown delay-1s flex justify-center items-center"
                                >
                                    <img
                                        src="../../assets/img/logo2.png"
                                        class="w-84"
                                        alt
                                    />
                                </div>
                                <p
                                    class="animated fadeInUp delay-2s mt-4 italic text-sm text-gray-300"
                                >
                                    Selamat datang Aryaners di portal informasi
                                    lengkap seputar COVID-19 di Indonesia,
                                    pengenalan, pencegahan, serta tindakan
                                    kesiapsiagaan yang bisa dilakukan.
                                    #AryanersSiagaCOVID19
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
                    style="height: 70px; transform: translateZ(0px);"
                >
                    <svg
                        class="absolute bottom-0 overflow-hidden"
                        xmlns="http://www.w3.org/2000/svg"
                        preserveAspectRatio="none"
                        version="1.1"
                        viewBox="0 0 2560 100"
                        x="0"
                        y="0"
                    >
                        <polygon
                            class="text-section fill-current"
                            points="2560 0 2560 100 0 100"
                        />
                    </svg>
                </div>
            </div>
            <section class="pb-20 bg-section -mt-24">
                <div class="container mx-auto px-4">
                    <Cards />
                    <div class="flex flex-wrap items-center mt-32">
                        <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
                            <div
                                class="text-gray-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-gray-100"
                                data-aos="zoom-in"
                                data-aos-duration="1000"
                            >
                                <i class="far fa-file-alt fa-2x text-xl"></i>
                            </div>
                            <h3
                                class="text-3xl mb-2 font-semibold leading-normal"
                                data-aos="fade-down"
                                data-aos-duration="800"
                            >
                                AN Info Terkini
                            </h3>
                            <p
                                class="text-lg font-light leading-relaxed mt-4 mb-4 text-gray-700"
                                data-aos="fade-down"
                                data-aos-duration="800"
                            >
                                Temukan informasi internal terkini dari Tim
                                Satgas P3DC Arya Noble Group
                            </p>
                            <p
                                class="text-lg font-light leading-relaxed mt-0 mb-4 text-gray-700"
                                data-aos="fade-down"
                                data-aos-duration="800"
                            >
                                Masukan password untuk mendapatkan tautan
                            </p>
                            <a
                                v-if="this.gdrive !== ''"
                                :href="this.gdrive"
                                target="__blank"
                                class="font-semibold text-sm truncate text-black mt-8 w-10 px-4 py-2 shadow-xl tombol-click-me rounded-full"
                                data-aos="fade-down"
                                data-aos-duration="800"
                                >Click me !</a
                            >
                            <div class="container mt-2">
                                <div
                                    class="flex w-full justify-between items-center"
                                >
                                    <form @submit.prevent="link()">
                                        <input
                                            v-model="form.password"
                                            class="bg-white px-4 py-2 w-40 shadow-inner rounded-full focus:outline-none focus:shadow-outline text-xs"
                                            type="password"
                                            placeholder="Password"
                                            name="password"
                                            id="password"
                                            aria-label="Password"
                                            data-aos="zoom-in"
                                            data-aos-duration="600"
                                            style="font-size: 16px;"
                                            required
                                        />
                                        <button
                                            class="tombol-get-link shadow-2xl w-24 px-4 py-2 rounded-full focus:outline-none focus:shadow-outline text-white text-xs tracking-wide uppercase m-4"
                                            type="submit"
                                            data-aos="zoom-in"
                                            data-aos-duration="600"
                                        >
                                            Get Link
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-4/12 px-4 mr-auto ml-auto mt-8">
                            <div
                                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg bg-blue-600"
                                data-aos="fade-up"
                                data-aos-duration="500"
                                data-aos-easing="ease-in-out"
                            >
                                <img
                                    alt="..."
                                    src="../../assets/img/content_1.png"
                                    class="w-full align-middle rounded-lg"
                                    crossorigin="anonymous"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="relative py-20 bg-cc">
                <div
                    class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
                    style="height: 80px; transform: translateZ(0px);"
                >
                    <svg
                        class="absolute bottom-0 overflow-hidden"
                        xmlns="http://www.w3.org/2000/svg"
                        preserveAspectRatio="none"
                        version="1.1"
                        viewBox="0 0 2560 100"
                        x="0"
                        y="0"
                    >
                        <polygon
                            class="text-cc fill-current"
                            points="2560 0 2560 100 0 100"
                        />
                    </svg>
                </div>
                <div class="container mx-auto px-4">
                    <div class="items-center flex flex-wrap">
                        <div class="w-full md:w-5/12 ml-auto mr-auto px-4 mt-8">
                            <div class="md:pr-12">
                                <div
                                    class="text-white p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-icon-pertama"
                                    data-aos="zoom-in"
                                    data-aos-duration="1000"
                                >
                                    <i
                                        class="far fa-newspaper fa-2x text-xl"
                                    ></i>
                                </div>
                                <h3
                                    class="text-3xl font-semibold"
                                    data-aos="fade-up"
                                    data-aos-duration="800"
                                >
                                    Info COVID-19 Terkini di Indonesia
                                </h3>
                                <p
                                    class="mt-4 text-lg leading-relaxed text-gray-600"
                                    data-aos="fade-up"
                                    data-aos-duration="800"
                                >
                                    Temukan informasi terkini terkait
                                    perkembangan COVID-19 yang ada di Indonesia
                                </p>
                                <ul class="list-none mt-6 underline">
                                    <li
                                        class="py-2"
                                        data-aos="fade-up"
                                        data-aos-duration="800"
                                    >
                                        <div class="flex items-center">
                                            <div>
                                                <span
                                                    class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-white bg-icon-pertama mr-3"
                                                >
                                                    <i
                                                        class="fas fa-angle-right"
                                                    ></i>
                                                </span>
                                            </div>
                                            <div>
                                                <h4
                                                    class="text-gray-600 hover:text-blue-400"
                                                >
                                                    <a
                                                        href="https://www.cnnindonesia.com/teknologi/20200804133200-199-531992/alat-sinar-uv-c-basmi-corona-ala-lipi-masih-tunggu-izin-edar"
                                                        target="__blank"
                                                        >Alat Sinar UV-C Basmi
                                                        Corona ala LIPI Masih
                                                        Tunggu Izin Edar
                                                    </a>
                                                </h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li
                                        class="py-2"
                                        data-aos="fade-up"
                                        data-aos-duration="800"
                                    >
                                        <div class="flex items-center">
                                            <div>
                                                <span
                                                    class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-white bg-icon-pertama mr-3"
                                                >
                                                    <i
                                                        class="fas fa-angle-right"
                                                    ></i>
                                                </span>
                                            </div>
                                            <div>
                                                <h4
                                                    class="text-gray-600 hover:text-blue-400"
                                                >
                                                    <a
                                                        href="https://www.cnnindonesia.com/teknologi/20200805023946-199-532230/fakta-terbaru-uji-klinis-vaksin-covid-19-di-bandung"
                                                        target="__blank"
                                                        >Fakta Terbaru Uji
                                                        Klinis Vaksin Covid-19
                                                        di Bandung</a
                                                    >
                                                </h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li
                                        class="py-2"
                                        data-aos="fade-up"
                                        data-aos-duration="800"
                                    >
                                        <div class="flex items-center">
                                            <div>
                                                <span
                                                    class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-white bg-icon-pertama mr-3"
                                                >
                                                    <i
                                                        class="fas fa-angle-right"
                                                    ></i>
                                                </span>
                                            </div>
                                            <div>
                                                <h4
                                                    class="text-gray-600 hover:text-blue-400"
                                                >
                                                    <a
                                                        href="https://regional.kompas.com/read/2020/08/04/20305231/erick-thohir-bio-farma-siap-produksi-250-juta-dosis-vaksin-covid-19-tersedia"
                                                        target="__blank"
                                                        >Erick Thohir: Bio Farma
                                                        Siap Produksi 250 Juta
                                                        Dosis Vaksin Covid-19,
                                                        Tersedia Mulai Desember
                                                        2020</a
                                                    >
                                                </h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li
                                        class="py-2"
                                        data-aos="fade-up"
                                        data-aos-duration="800"
                                    >
                                        <div class="flex items-center">
                                            <div>
                                                <span
                                                    class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-white bg-icon-pertama mr-3"
                                                >
                                                    <i
                                                        class="fas fa-angle-right"
                                                    ></i>
                                                </span>
                                            </div>
                                            <div>
                                                <h4
                                                    class="text-gray-600 hover:text-blue-400"
                                                >
                                                    <a
                                                        href="https://www.liputan6.com/news/read/4322594/ini-5-perkembangan-terkini-kasus-corona-di-indonesia-dari-satgas-covid-19"
                                                        target="__blank"
                                                        >5 Perkembangan Terkini
                                                        Kasus Corona di
                                                        Indonesia</a
                                                    >
                                                </h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li
                                        class="py-2"
                                        data-aos="fade-up"
                                        data-aos-duration="800"
                                    >
                                        <div class="flex items-center">
                                            <div>
                                                <span
                                                    class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-white bg-icon-pertama mr-3"
                                                >
                                                    <i
                                                        class="fas fa-angle-right"
                                                    ></i>
                                                </span>
                                            </div>
                                            <div>
                                                <h4
                                                    class="text-gray-600 hover:text-blue-400"
                                                >
                                                    <a
                                                        href="https://www.antaranews.com/berita/1649926/pupuk-indonesia-catat-kinerja-positif-meski-dibayangi-covid-19"
                                                        target="__blank"
                                                        >Pupuk Indonesia catat
                                                        kinerja positif meski
                                                        dibayangi COVID-19</a
                                                    >
                                                </h4>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div
                            class="w-full md:w-4/12 mt-8 ml-auto mr-auto px-4"
                            data-aos="fade-right"
                            data-aos-duration="1000"
                        >
                            <img
                                alt="..."
                                class="max-w-full rounded-lg shadow-lg"
                                crossorigin="anonymous"
                                src="../../assets/img/content_2.png"
                            />
                        </div>
                    </div>
                </div>
            </section>
            <section class="pt-20 pb-48 bg-cc">
                <CallCenter />
            </section>
        </main>
        <footer-component></footer-component>
    </div>
</template>
<script>
import Cards from "./Cards.vue";
import CallCenter from "./CallCenter.vue";
import NavbarComponent from "./Navbar.vue";
import FooterComponent from "./Footer.vue";
import Demo from "./Demo";
export default {
    name: "landing-page",
    components: {
        NavbarComponent,
        FooterComponent,
        Cards,
        CallCenter,
        Demo
    },

    data() {
        return {
            gdrive: "",
            form: {
                password: ""
            }
        };
    },

    methods: {
        link() {
            axios
                .post("/api/gdrive", {
                    password: this.form.password
                })
                .then(response => {
                    this.gdrive = response.data;
                    Swal.fire("Yes!", "Your Password is correct!.", "success");
                })
                .catch(() =>
                    Swal.fire("Oops!", "Password Incorrect!", "error")
                );
        }
    }
};
</script>

<style scoped>
.background-covid {
    background-image: url("../../assets/img/background.jpg");
}
</style>
