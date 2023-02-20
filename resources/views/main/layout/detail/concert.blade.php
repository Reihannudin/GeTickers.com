@extends('main.index')

@section('content')
    <div class="col-12 bg-white">
        <div class="col-12">
            @include('main.component.detail.concert.banner')
            <div class="py-2 col-12">
                <ul class="nav col-11 mx-auto pb-0 mb-0" style="font-size: 16px">
                    <li class="nav-item">
                        <a class="nav-link text-dark active fw-bolder" aria-current="page" href="#">Summary</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bolder" href="#highlight" style="color: #757575">Highlight</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bolder" href="#package" style="color: #757575">Package</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bolder" href="#location" style="color: #757575">Location</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bolder" href="#other" style="color: #757575">Others</a>
                    </li>

                </ul>
                <hr class="mt-1 w-75 pt-0" />
                <div id="summary" class="col-11 mx-auto row">
                    <div class="col-7 me-4 py-3">
                        <div class="d-flex mb-2 gap-2 col-12">
                            <span class="font-13">Concert</span>
                            <i>0</i>
                            <span class="font-13">Jakarta Pusat, Indonesia</span>
                        </div>
                        <div class="my-2 col-12">
                            <h2 class="fw-bolder">DAY 1 - BLACKPINK WORLD TOUR [BORN PINK] JAKARTA (GENERAL SALES)</h2>
                            <div class="d-flex gap-2">
                                <i>0</i>
                                <span class="font-14">11 Mar 2023</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 ms-5 py-3">
                        <div class="text-end">
                            <span class="font-14">
                                Start From
                            </span>
                            <h4 class="fw-bolder text-danger my-3">IDR.1.350.000</h4>
                            <div>
                                <form>
                                    <button class="btn btn-dark">See Package</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <hr class="col-11 mx-auto"/>
                <div id="highlight" class="col-11 mx-auto mt-5 mb-3 row">
                    <div class="mx-0 px-0">
                        <div class="mx-2 px-2">
                            <h3>Highlight</h3>
                        </div>
                        <div class="mx-0 py-3 px-0">
                            <ul class="col-10 mx-0 gap-3">
                                <li><p style="color: #7e7e7e">Menyaksikan konser grup K-Pop legendaris, BLACKPINK WORLD TOUR [BORN PINK] JAKARTA membawakan lagu-lagu hits mereka seperti Pink Venom, Shut Down, BOOMBAYAH, dan masih banyak lagi!</p></li>
                                <li><p style="color: #808080">Konser akan dilaksanakan pada tanggal 11 & 12 Maret 2023 di Stadion Utama Gelora Bung Karno, Jakarta.</p></li>
                            </ul>
                            <div class="mx-2 col-8 ps-2 pe-4 py-2 " style="border-radius:12px ; background: rgba(219,239,243,0.89)">
                                <div class="col-12">
                                    <div class="col-12">
                                        <div class="d-flex mx-3 gap-2">
                                            <i class="my-2">0</i>
                                            <h6 class="fw-bold py-2">Info Penting</h6>
                                        </div>
                                        <ul class="gap-1">
                                            <li class="my-0 py-0"><p class="my-2 py-0 fw-bolder">Show DAY 1: Sabtu, 11 Maret 2023 (19.00 WIB)</p></li>
                                            <li class="my-0 py-0"><p class="my-2 py-0 fw-bolder">General Sales untuk pertunjukan DAY 1 dimulai pada tanggal 10 Januari 2023 (jam 12.00 siang).</p></li>
                                            <li class="my-0 py-0"><p class="my-2 py-0 fw-bolder">1 orang dapat membeli maks. 6 tiket per hari pertunjukan.</p></li>
                                            <li class="my-0 py-0"><p class="my-2 py-0 fw-bolder">Kursi bersifat diurutkan (Numbered Seating) dengan penentuan yang diatur oleh sistem tiket.com berdasarkan ketersediaan tiket.</p></li>
                                            <li class="my-0 py-0"><p class="my-2 py-0 fw-bolder">Untuk tiket CAT 2, CAT 3, dan CAT 4, nomor kursi akan ditentukan oleh tiket.com dan akan diinformasikan lewat email & WA.</p></li>
                                            <li class="my-0 py-0"><p class="my-2 py-0 fw-bolder">Nomor kursi dipilihkan oleh sistem sehingga kemungkinan bisa terpisah meskipun dengan satu order ID yang sama.</p></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <hr class=" col-8 mt-4 mx-2"/>
                        </div>
                    </div>
                </div>
                <div id="package" class="col-11 mx-auto my-3 row">
                    <div class="col-12">
                        <div class="col-10 ">
                            <h3 class="fw-bolder pb-3">Package</h3>
                            <p class="fw-bolder">Select your package</p>
                        </div>
                        <hr class="col-10"/>
                        <div class="col-12 gap-3 row">
                            <div class="col-7">
                                <div class="col-12">
                                    <div class="col-12">
                                        <div class="card w-100 mb-4">
                                            <div class="col-11 mx-auto  mt-3 d-flex justify-content-between">
                                                <h6 class="fw-bolder">PLATINUM LEFT</h6>
                                                <a class="text-primary cursor-pointer"><h6 class="fw-bolder text-primary">Detail</h6></a>
                                            </div>
                                            <div class="col-11 my-1 mx-auto">
                                                <ul class="d-flex list-unstyled gap-3">
                                                    <li>
                                                        <a href="">
                                                            <div class="gap-2  text-dark">
                                                                <i>0</i>
                                                                <span>Berlaku di tanggal terpilih</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <div class="gap-2 text-dark">
                                                                <i>0</i>
                                                                <span>Konfirmasi instan</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <div class="gap-2 text-dark">
                                                                <i>0</i>
                                                                <span>Tidak bisa refund</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <hr class="col-12" />
                                                <div class="d-flex pb-2 justify-content-between">
                                                    <h5 class="text-danger mt-2 fw-bolder">IDR.1.350.000</h5>
                                                    <button style="height: 40px" class="btn py-0 my-auto btn-outline-dark px-4">
                                                        Select Ticket
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card w-100 mb-4">
                                            <div class="col-11 mx-auto  mt-3 d-flex justify-content-between">
                                                <h6 class="fw-bolder">PLATINUM LEFT</h6>
                                                <a class="text-primary cursor-pointer"><h6 class="fw-bolder text-primary">Detail</h6></a>
                                            </div>
                                            <div class="col-11 my-1 mx-auto">
                                                <ul class="d-flex list-unstyled gap-3">
                                                    <li>
                                                        <a href="">
                                                            <div class="gap-2  text-dark">
                                                                <i>0</i>
                                                                <span>Berlaku di tanggal terpilih</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <div class="gap-2 text-dark">
                                                                <i>0</i>
                                                                <span>Konfirmasi instan</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <div class="gap-2 text-dark">
                                                                <i>0</i>
                                                                <span>Tidak bisa refund</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <hr class="col-12" />
                                                <div class="d-flex pb-2 justify-content-between">
                                                    <h5 class="text-danger mt-2 fw-bolder">IDR.1.350.000</h5>
                                                    <button style="height: 40px" class="btn py-0 my-auto btn-outline-dark px-4">
                                                        Select Ticket
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card w-100 mb-4">
                                            <div class="col-11 mx-auto  mt-3 d-flex justify-content-between">
                                                <h6 class="fw-bolder">PLATINUM LEFT</h6>
                                                <a class="text-primary cursor-pointer"><h6 class="fw-bolder text-primary">Detail</h6></a>
                                            </div>
                                            <div class="col-11 my-1 mx-auto">
                                                <ul class="d-flex list-unstyled gap-3">
                                                    <li>
                                                        <a href="">
                                                            <div class="gap-2  text-dark">
                                                                <i>0</i>
                                                                <span>Berlaku di tanggal terpilih</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <div class="gap-2 text-dark">
                                                                <i>0</i>
                                                                <span>Konfirmasi instan</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            <div class="gap-2 text-dark">
                                                                <i>0</i>
                                                                <span>Tidak bisa refund</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <hr class="col-12" />
                                                <div class="d-flex pb-2 justify-content-between">
                                                    <h5 class="text-danger mt-2 fw-bolder">IDR.1.350.000</h5>
                                                    <button style="height: 40px" class="btn py-0 my-auto btn-outline-dark px-4">
                                                        Select Ticket
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="col-12 card px-3 py-3" style="border-radius: 12px">
                                    <h5 class="my-2">Venue</h5>
                                    <div class="col-12 mb-3 mt-2 mx-auto">
                                        <img class="col-12" src="{{ asset('assets/img/banner/blackpink-poster.webp') }}" alt/>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div id="location" class="col-11 mx-auto my-3">
                    <div class="col-12">
                        <h3 class="mt-5 fw-bolder mb-3">Locations</h3>
                        <div class="col-12">
                            <div class="container-fluid" >
                                <div class="position-relative col-12 map-responsive" style="border-radius: 12px; border: 1px solid #eeeeee ">
                                    <img class="w-100"  style="height: 250px ; border-radius:12px ; border: 1px solid #eeeeee " src="{{ asset('assets/img/component/map.webp') }}"/>
{{--                                    <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="100%"  height="250" frameborder="0" style="border:0 ;border-radius: 12px " allowfullscreen></iframe>--}}
                                    <div class="position-absolute bottom-0">
                                        <div class="w-100 col-12 my-0 py-3" style="background:linear-gradient(rgba(255,255,255,0.8) ,rgb(255,255,255)) ; border-radius:  0px 0px 12px 12px; border: 1px solid rgba(229,229,229,0.75) ">
                                            <div class="d-flex col-12 row">
                                                <div class="col-1">
                                                    <div class="col-3 my-1 mx-auto" style="height: 28px">
                                                        <img class="h-100 mx-auto" src="{{ asset('assets/img/icons/location-icon.svg') }}" alt=""/>
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <h5 class="my-0 fw-bolder py-0">Stadion Utama Gelora Bung Karno, Jalan Pintu Satu Senayan, Gelora, Central Jakarta City, Jakarta, Indonesia</h5>
                                                    <p class="my-0 py-0">Stadion Utama Gelora Bung Karno, Jakarta Pusat, Jakarta, Indonesia</p>
                                                </div>
                                                <div class="col-3">
                                                    <div class="col-12 row">
                                                        <div class="col-6">
                                                            <a class="cursor-pointer">
                                                                <div class="col-5 mt-1 mb-2 mx-auto" style="height: 26px">
                                                                    <img class="h-100 mx-auto" src="{{ asset('assets/img/icons/cursor-icon.svg') }}" alt=""/>
                                                                </div>
                                                                <span class="fw-bolder mt-5 text-dark">Petunjuk Arah</span>
                                                            </a>
                                                        </div>
                                                        <div class="col-6">
                                                            <a class="cursor-pointer">
                                                                <div class="col-5 mt-1 mb-2 mx-auto" style="height:26px">
                                                                    <img class="h-100 mx-auto" src="{{ asset('assets/img/icons/map-icon.svg') }}" alt=""/>
                                                                </div>
                                                                <span class="fw-bolder mt-5 text-dark">Map Location</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="other" class="col-11 mx-auto pb-4 my-3">
                    <div class="col-12 row justify-content-between">
                        <div class="col-5">
                            <h3 class="mt-5 mb-3">Description</h3>
                            <div class="col-12">
                                <p>BLACKPINK IN YOUR AREAAA~

                                    Grup K-pop legendaris, BLACKPINK akan datang kembali ke Jakarta untuk mempromosikan album terbaru mereka, BORN PINK melalui tur dunia mereka yang bertajuk, BLACKPINK WORLD TOUR [BORN PINK] JAKARTA pada tanggal 11 & 12 Maret 2023 di Stadion Utama Gelora Bung Karno, Jakarta!

                                    Grup beranggotakan empat orang ini akan menyapa BLINK Indonesia selama dua hari! Jadi, BLINKS, persiapkan dirimu untuk menari dan menyanyi bersama lagu-lagu hits mereka mulai dari Pink Venom, DDU-DU DDU-DU, Shut Down, BOOMBAYAH, dan masih banyak lagi!

                                    Segera beli tiket konser BLACKPINK eksklusif di tiket.com sekarang!</p>
                            </div>
                        </div>
                        <div class="col-6">
                               <div class="page-content my-4">
                                   <div class="row my-2">
                                       <div class="col-11 ">
                                           <div class="text-start">
                                               <h4 class="mb-0 text-uppercase">Another Information</h4>
                                               <hr/>
                                           </div>
                                           <div class="">
                                               <div class="">
                                                   <div class="accordion accordion-flush" id="accordionExample2">
                                                       <div class="accordion-item">
                                                           <h2 class="accordion-header" id="headingFive">
                                                               <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                                                   Penukaran Tiket
                                                               </button>
                                                           </h2>
                                                           <div id="collapseFive" class="accordion-collapse collapse show" aria-labelledby="headingFive" data-bs-parent="#accordionExample2">
                                                               <div class="accordion-body">
                                                                   <ul>
                                                                       <li><p>Lokasi Penukaran Tiket: TBA</p></li>
                                                                       <li><p>Tunjukkan e-tiket yang telah diterima melalui email atau di halaman “Your Orders” di aplikasi tiket.com kepada petugas di lapangan untuk scan QR Code. Sesuaikan tingkat kecerahan layar ponsel sebelum menunjukkan QR Code.</p></li>
                                                                       <li><p>Wajib menunjukkan kartu identitas yang berlaku. Untuk customer yang berusia di bawah 17 tahun dan tidak memiliki kartu identitas, bisa diganti dengan kartu pelajar.</p></li>
                                                                       <li><p>Jika penukaran tiket akan diwakilkan, maka wajib membawa surat kuasa atas nama pembeli (nama harus sesuai dengan yang tertulis di e-tiket) serta fotokopi kartu identitas pemberi dan penerima kuasa.</p></li>
                                                                       <li><p>Customer wajib memakai masker, membawa hand sanitizer pribadi, dan mematuhi seluruh protokol kesehatan selama event berlangsung.</p></li>
                                                                   </ul>
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <div class="accordion-item">
                                                           <h2 class="accordion-header" id="headingSix">
                                                               <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                                   Syarat & Ketentuan
                                                               </button>
                                                           </h2>
                                                           <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample2">
                                                               <div class="accordion-body">
                                                                   <div>
                                                                       <h6>Umum</h6>
                                                                       <ul>
                                                                           <li><p>Sesuai dengan regulasi yang tertera pada Surat Edaran (SE) Satuan Tugas Penanganan Covid-19 20/2022, seluruh penonton wajib sudah menerima Vaksinasi Lengkap. Khusus untuk penonton yang berusia 18 tahun ke atas wajib sudah menerima Vaksin Booster.</p></li>
                                                                           <li><p>Promotor akan memberlakukan ketentuan tambahan di kemudian hari terkait protokol kesehatan sesuai dengan ketentuan yang diberlakukan oleh Pemerintah Republik Indonesia.</p></li>
                                                                           <li><p>Jika kamu melakukan pembelian tiket acara ini, maka dianggap sudah membaca, memahami, dan menyetujui seluruh Syarat & Ketentuan dari acara.</p></li>
                                                                           <li><p>Transaksi tiket.com yang resmi hanyalah yang dilakukan melalui website dan aplikasi tiket.com. Kami tidak bertanggung jawab atas transaksi yang terjadi di luar website dan/atau aplikasi tiket.com.</p></li>
                                                                           <li><p>Dalam hal ini tiket.com hanya berperan sebagai agen penjual tiket, sehingga hal-hal yang timbul sehubungan dengan acara termasuk namun tidak terbatas pada penggunaan atas tiket sepenuhnya merupakan tanggung jawab antara pembeli dan promotor acara.</p></li>
                                                                           <li><p>Harga sudah termasuk pajak</p></li>
                                                                           <li><p>Tiket yang sudah dibeli tidak dapat dikembalikan dan non-refundable.</p></li>
                                                                           <li><p>Tiket yang sudah dibeli tidak dapat diganti jadwalnya.</p></li>
                                                                           <li><p>Pembeli wajib mengisi data diri pribadi saat memesan.</p></li>
                                                                           <li><p>Penjualan tiket sewaktu-waktu dapat dihentikan atau dimulai oleh tiket.com sesuai dengan kebijakan dari promotor atau tiket.com.</p></li>
                                                                           <li><p>Pengunjung wajib sudah divaksinasi dan memiliki aplikasi Peduli Lindungi.</p></li>
                                                                           <li><p>Pengunjung wajib menggunakan masker selama acara berlangsung.</p></li>
                                                                           <li><p>Pengunjung wajib menjaga protokol kesehatan yang berlaku.</p></li>
                                                                           <li><p>Anak-anak dibawah umur 12 tahun harus didampingi oleh orang dewasa. 1 orang dewasa dapat mendampingi maksimal 2 anak dibawah umur 12 tahun.</p></li>
                                                                       </ul>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <!--end row-->
                               </div>
                       </div>
                    </div>
                    <div class="col-12">
                        <h3 class="mt-5 mb-3">BLACKPINK Konser Jakarta 2023 Born Pink World Tour Akan Datang, Siap-Siap!</h3>
                        <div class="col-11">
                            <p class="" style=" overflow-x: hidden ; overflow-y: scroll; height: 200px">
                                Blink Indonesia! Sudah siap menyambut kedatangan Jennie, Lisa, Rose, dan Jisoo? Grup K-pop asal Korea Selatan, BLACKPINK akan mengadakan konser Born Pink World Tour di 27 negara salah satunya di Jakarta. Kapan BLACKPINK Konser Jakarta 2023 diselenggarakan? Kamu bisa bertemu dengan member BLACKPINK selama 2 hari yaitu Sabtu, 11 Maret dan Minggu 12 Maret 2023. Catat tanggalnya ya Blink! Kamu bisa langsung cek harga tiket konser BLACKPINK 2023 dan pesan di tiket.com. Dalam konsernya BLACKPINK akan menampilkan lagu Pink Venom sebagai salah satu lagu album Born Pink yang sudah diputar lebih dari 375 juta di berbagai platform musik online. Selain lagu Pink Venom, BLACKPINK juga akan membawakan lagu WHISTLE, How You Like That, PLAYING WITH FIRE, Kill This Love, Pretty Savage, BOOMBAYAH, As If It’s Your Last, Shut Down, Lovesick Girls, Yeah Yeah Yeah, Kiss and Make Up, dan DDU-DU DDU-DU.

                                BLACKPINK debut sejak 2016 dengan lagu pertama Square One, membuat girl band K-Pop ini melesat hingga mencapai posisi tertinggi di Billboard Hot 100. Sejak BLACKPINK debut tahun 2016, grup pop Korea ini telah meraih 25 penghargaan musik dan menjadi grup K-pop terbaik. Belum lama ini keempat member BLACKPINK mendapatkan penghargaan:

                                First Musical Act dengan 75 juta subscriber di YouTube 2022
                                MTV Millennial Awards Brazil 2021
                                Gold Derby Awards 2021
                                Joox Hong Kong Top Music Awards 2020
                                Joox Thailand Music Awards 2020
                                Gimana? Makin ga sabar untuk nonton keseruan konser BLACKPINK di Jakarta kan? Yuk cek aplikasi tiket.com untuk detail lebih lanjut tentang tiket konser BLACKPINK supaya ga ketinggalan. Harga tiket untuk bertemu 4 member BLACKPINK di konser Born Pink Jakarta mulai dari Rp1,350,000 hingga RP3,800,000. Jangan lupa siapkan outfit terbaikmu dan lightstick BLACKPINK saat konser BLACKPINK nanti ya!

                                Fakta Menarik Member BLACKPINK
                                Jennie BLACKPINK
                                Jennie Kim atau dikenal Jennie BLACKPINK lahir pada 16 Januari 1996 di Cheongdam-dong, Korea Selatan dengan zodiak Capricorn. Jennie BLACKPINK selain fasih bahasa Korea, Jennie BLACKPINK menguasai 2 bahasa yaitu Inggris dan Jepang. Tidak hanya jago di panggung sebagai seorang rapper, ternyata Jennie BLACKPINK jago dalam memasak hidangan khas Korea Selatan. Jennie Blackpink merupakan member BLACKPINK pertama yang disebut oleh YG Entertainment. Fakta lain member Blackpink Jennie, ia dikenal sebagai brand ambassador merek Chanel dan Calvin Klein.

                                Lisa BLACKPINK
                                Pranpiya Manoban atau dikenal Lisa BlACKPINK lahir pada 27 Maret 1997 di Buriram, Thailand dengan zodiak Pisces. Lisa BLACKPINK adalah anggota termuda BLACKPINK dan telah bergabung YG Entertainment sejak usia 13 tahun. Selain jago dansa di panggung, Lisa BLACKPINK memiliki hobi fotografi dengan mengoleksi kamera digital hingga analog. Lisa BLACKPINK adalah member BLACKPINK ke-2 yang diumumkan oleh YG Entertainment. Fakta lain member Blackpink Lisa, ia dikenal sebagai brand ambassador merek Bvlgari dan Celine

                                Jisoo BLACKPINK
                                Jennie Kim atau Jisoo BlACKPINK lahir pada 3 Januari 1995 di Gunpo, Korea Selatan dengan zodiak Capricorn. Dijuluki fans clubnya Blink sebagai “Miss Korea” karena memiliki paras wajah yang menawan. Selain memiliki suara vokal yang merdu, ternyata Jisoo BLACKPINK bisa bermain alat musik drum dan piano, selain itu Jisoo BLACKPINK juga jago akting dengan bermain drama Korea berjudul Snowdrop sebagai bintang utama lho sobat tiket!. Jisoo BLACKPINK adalah member BLACKPINK ke-3 yang disebut oleh YG Entertainment. Fakta lain member BLACKPINK Jisoo, ia dikenal sebagai brand ambassador DIOR dan model untuk DIOR Beauty.

                                Rose BLACKPINK
                                Nama asli Rose BLACKPINK adalah Park Chaeyoung / Roseanne Park, Rose BLACKPINK merupakan vokalis utama BLACKPINK. Lahir di Auckland, Selandia Baru 11 Februari 1997 dengan zodiak Aquarius, sejak kecil Rose BLACKPINK gemar menyanyi dan menjadi bagian paduan suara di Gereja. Selain jago nyanyi, fakta menarik Rose BLACKPINK dikenal sebagai ambidextrous, di mana bisa menggunakan kedua tangan dengan baik. Rose BLACKPINK adalah member BLACKPINK ke-4 yang disebut oleh YG Entertainment. Fakta lain member BLACKPINK Rose, ia menjadi model untuk brand YSL dan Perfect World Mobile.

                                Kumpulan Album Blackpink
                                Girl group asal Korea Selatan, Blackpink, dikabarkan akan menggelar konsernya yang berjudul ‘Born Pink World Tour’ di Indonesia dalam waktu dekat. Nah, buat kamu para Blink (sebutan bagi fans Blackpink), nggak afdol rasanya kalau belum hafal sejumlah lagu hits Blackpink, termasuk lagu debut Blackpink. Yuk, simak daftarnya di bawah ini!

                                1. Square One (2016)
                                Girl group Blackpink debut pada tahun 2016 silam, pertama kali merilis single album berjudul ‘Square One’ dengan dua lagu andalannya yaitu Whistle dan Boombayah.

                                2. As If It’s Your Last (2017)
                                Sukses dengan album sebelumnya, pada tahun 2017 girl group yang terdiri dari 4 member tersebut kemudian merilis single baru Blackpink ‘As If It’s Your Last’.

                                3. Square Up (2018)
                                1 tahun kemudian, mereka merilis album Square Up dengan Blackpink Ddu-Du Ddu-Du sebagai lagu andalan. Selain itu, terdapat lagu menarik lainnya seperti ‘Really’, ‘Forever Young’, dan ‘See U Later’ .

                                4. Kill This Love (2019)
                                Pada tahun 2019, Blackpink comeback merilis album yang berjudul ‘Kill This Love’. Lagu Blackpink Kill This Love sangat populer hingga merajai di sejumlah tangga lagu. Selain itu, terdapat juga lagu yang nggak kalah keren seperti ‘Don't Know What To Do’, ‘Kick It’, ‘Hope Not’, dan ‘Ddu-Du Ddu-Du’ remix.

                                5. The Album (2020)
                                Tahun 2020, Blackpink merilis album ‘The Album’, dengan lagu andalan Blackpink ‘How You Like That’. Lagu tersebut sangat populer di tahun 2020 dan cukup menyita perhatian publik hingga kancah internasional. Selain itu, terdapat juga lagu ‘Lovesick Girl’, ‘Love to Hate Me’, ‘You Never Know’, ‘Crazy Over You’, dan Blackpink ‘Pretty Savage’. Kerennya, di album ini, Blackpink juga menggandeng sejumlah penyanyi asal Amerika seperti Selena Gomez dan Cardi B untuk berkolaborasi. Lagunya yang populer seperti Blackpink ‘Ice Cream’ dan ‘Bet You Wanna’.

                                Untuk konser Blackpink bertajuk ‘Born Pink World Tour’, Blackpink pastinya akan membawakan lagu mereka yang terbaru yang berjudul Pink Venom.

                                Riwayat Konser Blackpink di Jakarta
                                Sebelumnya, pada tahun 2019 silam, Blackpink sudah pernah menggelar konser di Indonesia pada tanggal 19 dan 20 Januari 2019. Konser tersebut bertajuk ‘In Your Area’ diselenggarakan di ICE BSD, Tangerang Selatan. Tiket konser ‘In Your Area’ pada tahun 2019 dibagi menjadi dua jenis yaitu, seating dan standing.

                                Tiket seating sendiri dibagi menjadi empat kategori yaitu Bronze, Jade, Silver, dan Gold dengan harga masing-masing mulai dari Rp1 jutaan. Sementara tiket standing, juga dibagi menjadi empat kategori yaitu, Jade, Ruby, Platinum, dan Diamond dengan kisaran harga Rp1-2 jutaan.

                                Pertanyaan Umum Tentang BLACKPINK Konser Jakarta 2023
                                Bagaimana Cara Beli Tiket Konser BLACKPINK 2023 di tiket.com?
                                Sobat tiket bisa membeli tiket konser Blackpink di aplikasi tiket.com, khususnya pada kategori “Event”. Pilih tiket sesuai dengan seat plan yang kamu inginkan, lalu segera lakukan pembayaran dengan berbagai pilihan metode pembayaran. Apabila sudah melakukan transaksi, kamu akan mendapatkan notifikasi lebih lanjut mengenai E-tiket yang kamu telah beli.

                                Berapa Harga Tiket Konser BLACKPINK?
                                Untuk sampai saat ini harga tiket konser BLACKPINK 2023 belum ada info lebih lanjut,    namun pastikan kamu tetap cek halaman event tiket.com untuk mendapatkan detail harga tiket konser Blackpink 2023 ter-update.

                                BLACKPINK Konser di Indonesia Tanggal Berapa?
                                Dikutip dari akun official Instagram @yg_ent_official (YG Entertainment), BLACKPINK akan mengadakan konser BLACKPINK 2023 Born Pink World tour pada 11 Maret 2023 di Indonesia

                                Siapa Saja Member BLACKPINK
                                Ada 4 anggota member BLACKPINK, yaitu Jennie, Lisa, Jisoo, dan Rose. Grup K-pop ini dinobatkan sebagai grup K-pop terbaik dengan rilisan lagu yang memuncaki tangga lagu Billboard Hot 100.

                                Konser BLACKPINK di Indonesia 2023 dimana?
                                Konser BLACKPINK di Indonesia 2023 akan diadakan di Stadion Utama Gelora Bung Karno, Jakarta Pusat. Cek aplikasi tiket.com untuk info lebih lanjut.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

