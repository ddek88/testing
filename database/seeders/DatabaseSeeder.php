<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Color;
use App\Models\Identity;
use App\Models\Image;
use App\Models\Link;
use App\Models\Navbar;
use App\Models\Pintasan;
use App\Models\Sidebar;
use App\Models\Tagslot;
use App\Models\TentangKami;
use App\Models\StyleBackground;
use App\Models\StyleHeader;
use App\Models\StyleFooter;
use App\Models\StyleMobile;
use App\Models\StyleSidebar;
use App\Models\Artikel;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        StyleBackground::create([
            'background' => 'images/background.jpg',
            'thumn' => 'images/hero.png'
        ]);
        StyleHeader::create([
            'background' => '#700d0d',
            'font' => '#fff',
            'hover' => '#ffe240'
        ]);
        StyleMobile::create([
            'background' => '#700d0d',
            'font' => '#fff',
            'hover' => '#bdbdbd'
        ]);
        StyleSidebar::create([
            'background' => '#3f1010',
            'font' => '#fff',
            'border' => '#9a0f06'
        ]);
        StyleFooter::create([
            'background' => '#000000',
            'font' => '#fff',
        ]);
        User::create([
            'name' => 'User',
            'email' => 'test@gmail.com',
            'password'=> bcrypt(12345678)
        ]);
        Color::create([
            'color' => 'rgb(255, 255, 255)',
        ]);
        Identity::create([
            'nama_web' => 'Tangan Judi',
            'deskripsi' => 'Game slot yang mayoritas disukai para player slot di Indonesia berasal dari provider Pragmatic Play, dimana game favorite adalah Gates of Olympus ( Zeus ) dan Starlight Princess ( Inces )',
            'keyword' => 'slot, gacor, freebet',
            'custom' => '<meta content="custom" name="custom">'
        ]);
        Link::create([
           'navbar_login' => 'http://www.webamp.test/',
           'sidebar_daftar'	=> 'http://www.webamp.test/',
           'sidebar_login' 	=> 'http://www.webamp.test/',
           'tanggung_jawab' => 'http://www.webamp.test/',
           'dukungan_browser' => 'http://www.webamp.test/',
           'refferal' => 'http://www.webamp.test/',
           'postslink' => 'http://www.webamp.test/',
           'livechat' => 'http://www.webamp.test/livechat'

        ]);
        Navbar::create([
            'image_id' => 1,
            'url'	=> 'http://www.webamp.test/',
            'label' => 'Home'
        ]);
        Navbar::create([
            'image_id' => 1,
            'url'	=> 'http://www.webamp.test/',
            'label' => 'Slot'
        ]);
        Navbar::create([
            'image_id' => 1,
            'url'	=> 'http://www.webamp.test/',
            'label' => 'Trik Slot'
        ]);
        Navbar::create([
            'image_id' => 1,
            'url'	=> 'http://www.webamp.test/',
            'label' => 'Berita'
        ]);
        Navbar::create([
            'image_id' => 1,
            'url'	=> 'http://www.webamp.test/',
            'label' => 'RTP Live'
        ]);
        Pintasan::create([
            'url' => 'http://www.webamp.test/',
            'label' => 'Home'
        ]);
        Pintasan::create([
            'url' => 'http://www.webamp.test/',
            'label' => 'Demo Slot'
        ]);
        Pintasan::create([
            'url' => 'http://www.webamp.test/',
            'label' => 'Berita Slot'
        ]);
        Pintasan::create([
            'url' => 'http://www.webamp.test/',
            'label' => 'Tips & Trik Slot'
        ]);
        Pintasan::create([
            'url' => 'http://www.webamp.test/',
            'label' => 'RTP Live Hari Ini'
        ]);
        Pintasan::create([
            'url' => 'http://www.webamp.test/',
            'label' => 'Login Tangan Judi'
        ]);
        Pintasan::create([
            'url' => 'http://www.webamp.test/',
            'label' => 'Daftar Tangan Judi'
        ]);
        Sidebar::create([
            'image_id' => 2,
            'url' => 'http://www.webamp.test/',
            'label' => 'Daftar'
        ]);
        Sidebar::create([
            'image_id' => 2,
            'url' => 'http://www.webamp.test/',
            'label' => 'Login'
        ]);
        TagSlot::create([
            'url' => 'http://www.webamp.test/',
            'label' => 'rtp live'
        ]);
        TagSlot::create([
            'url' => 'http://www.webamp.test/',
            'label' => 'rtp 98%'
        ]);
        TagSlot::create([
            'url' => 'http://www.webamp.test/',
            'label' => 'maxwin gates of olympus'
        ]);
        TagSlot::create([
            'url' => 'http://www.webamp.test/',
            'label' => 'rtp zeus'
        ]);
        TagSlot::create([
            'url' => 'http://www.webamp.test/',
            'label' => 'demo slot online'
        ]);
        TagSlot::create([
            'url' => 'http://www.webamp.test/',
            'label' => 'menang slot'
        ]);
        TagSlot::create([
            'url' => 'http://www.webamp.test/',
            'label' => 'bet kecil'
        ]);
        TagSlot::create([
            'url' => 'http://www.webamp.test/',
            'label' => 'slot gacor'
        ]);
        TagSlot::create([
            'url' => 'http://www.webamp.test/',
            'label' => 'rtp tinggi'
        ]);
        TagSlot::create([
            'url' => 'http://www.webamp.test/',
            'label' => 'rtp slot'
        ]);
        TagSlot::create([
            'url' => 'http://www.webamp.test/',
            'label' => 'profit main slot'
        ]);
        TagSlot::create([
            'url' => 'http://www.webamp.test/',
            'label' => 'rtp tangan judi'
        ]);
        TagSlot::create([
            'url' => 'http://www.webamp.test/',
            'label' => 'auto wd'
        ]);
        TagSlot::create([
            'url' => 'http://www.webamp.test/',
            'label' => 'slot mudah menang'
        ]);
        TagSlot::create([
            'url' => 'http://www.webamp.test/',
            'label' => 'jackpot sweet bonanza'
        ]);
        TentangKami::create([
            'body' => 'Kami Tangan Judi sebagai situs agen judi online resmi juga memberikan jasa berupa layanan customer service 1x24 jam nonstop yang dimana semua customer service kami terlah terlatih dan melalui seleksi sehingga dapat memberikan layanan terbaik dan menjawab setiap kendala yang dialami oleh para member kami.'
        ]);
        Image::create([
            'image' => 'images/logo.png'
        ]);
        Image::create([
            'image' => 'images/logo.png'
        ]);
        Artikel::create([
            'body' => ' <table>
            <tbody><tr>
              <th>Jam Gacor</th>
              <td>
                ⏳ 19:00 WIB,
                ⏰ 13:00 WIB,
                ⌚ 22:00 WIB,
                ⌛ 02:00 WIB
              </td>
            </tr>
            <tr>
              <th>Slot Gacor</th>
              <td>
                💫 Starlight Princess,
                🔱 Gates of Olympus,
                🔫 Wild West Gold,
                🍭 Sweet Bonanza
              </td>
            </tr>
            <tr>
              <th>RTP Slot Gacor</th>
              <td>💲 97.05%</td>
            </tr>
            <tr>
              <th>Deposit</th>
              <td>💸 BANK dan 💳 E-MONEY Minimal : <strong>IDR 10.000</strong></td>
            </tr>
          </tbody>
        </table>
        <h2>Apa Itu <em>Slot Online?</em></h2>

        <p><a style="color: #9a0f06;" href="">Slot</a> sangat digandrungi oleh masyarakat Indonesia pada umumnya saat ini.</p>
        <p>Bermodalkan kemudahan bermain, <a style="color: #9a0f06;" href="">jumlah pertaruhan yang relatif kecil</a>, kamu memiliki kesempatan untuk memenangkan jumlah sampai 100.000 kali lipat dari nilai taruhannya.</p>
        <p>Sebagai contoh, dengan hanya modal 200 rupiah saja ( kamu gak salah baca kok ! ), kamu bisa memenangkan uang sampai dengan 1 juta rupiahnya di rata-rata permainan dengan maxwin terkecil ( 5000x ). Apalagi kalo kamu berani mempertaruhkan sampai seribu per spin nya.</p>
        <p>Slot Online dapat dimainkan oleh berbagai kalangan tanpa perlu mempelajari cara bermain dengan terlalu lama.</p>
        <p>Game slot yang mayoritas disukai para player slot di Indonesia berasal dari provider Pragmatic Play, dimana game favorite adalah Gates of Olympus ( Zeus ) dan Starlight Princess ( Inces ).</p>
        <p>TanganJudi sebagai bandar terpercaya yang sudah beroperasi sejak tahun 2017, tentunya gak ketinggalan menyediakan permainan tersebut ya.</p>
        <p>Seiring dengan berkembangnya jaman,mesin slot kini hadir dalam bentuk online yang dimana memanjakan para penggemarnya tidak perlu repot-repot untuk berkunjung.</p>
        <p>Meskipun sensasi bermain secara online ataupun langsung di tempatnya cukup berbeda. Tapi hal tersebut tidaklah menjadi sebuah polemik besar, karena yang dicari bermin secara online atau bermain langsung itu tujuannya sama yaitu sama-sama untuk mendapatkan kemenangan.</p>

        <h2><em>Asal Mula Slot</em> Online</h2>
        <p>Kita pasti pernah mengenal atau mengetahui bentuk mesin slot pada sebuah film barat yang sering kita tonton, salah satunya yang kamu pasti inget itu mesin slot di film Mr.Bean atau jaman waktu kita kecil dulu pernah nonton dewa judi yang dimainkan Stephen Chouw dan Chu Yun Fat.</p>
        <p>Ya itu dia sebagian kecil sejarah mengenai <a style="color: #9a0f06;" href="https://id.wikipedia.org/wiki/Mesin_slot" rel="noopener noreferrer" target="_blank">mesin slot</a> yang kita kenal dari sebuah film. Dan semenjak jaman semakin berubah dan canggih, mesin slot kini hadir dengan berbagai bentuk dan pola di benua Asia.</p>

        <h2>Perjalanan <em>Mesin Slot</em> Di Dunia</h2>
        <p>Secara harafiah mesin slot adalah sebuah mesin perjudian yang menciptakan sebuah pola dan peluang kemenangan untuk para konsumennya. Dikenal juga sebagai bandit judi satu tangan, karena bentuknya yang hanya memiliki satu tuas untuk dioprasikan pada saat bermain.</p>
        <p>Permainan <a style="color: #9a0f06;" href="">judi online</a> itu sendiri diperkenalkan ke dunia pada tahun 1887 oleh sebuah perusahaan Amerika Serikat yang bernama Sittman dan Pitt di Negara bagian New York. Saat itu isitilah-istilah judi slot belum begitu banyak dikenal dan tidak popular dinegara asalnya.</p>
        <p>Dan cara kita menjumpainya hanya di sejumlah tempat-tempat hiburan yang ramai dan cukup berkelas seperti hotel, restoran atau bar.</p>
        <p>Para pengunjung dapat memainkan mesin-mesin tersebut dengan cara memasukkan uang koin logam ke dalam mesin slot dan jika mengalami kemenangan para pemain harus menukarkan uang koin yang keluar atau memanggil pengelola tempat tersebut karena pada jaman dulu mesin tersebut tidak secara otomatis mengeluarkan uangnya.</p>
        <p>Namun beberapa tahun kemudian dari waktu dirilis ke publik, ada seorang mekanik yang bernama Charles August Fey yang amat sangat terobsesi dengan mesin tersebut dan berhasil mengubah atau menyempurnakan mesin tersebut dengan mengurangi jumlah pola dari yang tadinya pola didalam mesin ada lima menjadi tiga bagian.</p>
        <p>Charles sendiri menambahkan beberapa perubahan pada mesin tersebut salah satunya seperti pembayaran otomatis pada saat konsumen menang, jadi konsumen tidak perlu repot lagi memanggil pengelola tempat tersebut.</p>
        <p>Mesin ini juga dikenal sebagai lambang kebebasan berkat salah satu symbol yang ditambahkan berupa gambar lonceng dan dianggap sebagai mesin slot pertama yang ada di dunia.</p>
        <p>Charles yang merasa inovasi darinya terhadap mesin tersebut dihargai, Charles lalu memutuskan untuk berhenti dari pekerjaan sebelumnya agar dapat fokus membangun perusahaan yang membuat banyak mesin slot agar dapat memenuhi keinginan pasar penyuka mesin slot.</p>
        <p>Dan atas usaha dan dedikasinya yang besar terhadap mesin slot itu membawa Charles ke dalam ajang kesuksesan karena berhasil membuat terobosan besar terhadap mesin slot dan itu dinilai dari kemampuannya menguasai pasar arena judi disetiap kasino sebesar 70% dan 30%nya lagi untuk permainan lain di seluruh dunia.</p>

        <h2>Di Usia Berapa Boleh <em>Memainkan Slot?</em></h2>
        <p>Kalo ngomongin usia yang tepat menurut mimin itu di atas usia 21 tahun, karena pada jaman dulu mesin slot hanya bias ditemukan didalam sebuah kasino yang dimana tempat-tempat tersebut memiliki aturan bagi para pengunjungnya.</p>
        <p>Batas minimal seseorang untuk masuk ke tempat yang ada kasinonya harus di atas umur 21 tahun dan tidak ada maksimal batas usia seseorang untuk berkunjung kedalam tempat tersebut.</p>

        <h2>Bagaimana <em>Cara Bermain</em> Slot Online?</h2>
        <p>Jaman sekarang sudah apa-apa serba canggih ya dari makanan, minuman, barang, dan semua jenis sudah menggunakan system online. Sama halnya dengan judi, sekarang pun sudah bisa online dan otomatis slot pun juga demikian.</p>
        <p>Slot online bisa kita temukan jika kita mendaftar lewat sebuah situs judi online yang sekarang sudah bnyak di tawarkan baik itu via chat, sms atau telpon bahkan ajakan dari seorang teman. Dan di situs tersebut biasanya sudah ada platform khusus untuk memainkan judi onlinenya salah satunya adalah slot.</p>
        <p>Caranya cukup mudah biasanya ketika kita sudah mendaftar di sebuah situs, langkah pertama yang kita lakukan adalah mengisi saldo pada akun yang sudah kita buat atau biasa disebut dengan Deposit. Nilai deposit itu sendiri beragam dari mulai Rp.10.000,00 sampai Rp.100.000.000,00 dan cara pengisiannya juga beragam tergantung aturan dari situs itu sendiri.</p>
        <p>Ketika kita sudah melakukan pengisian deposit kita akn memilih jenis slot apa yang ingin kita mainkan,biasanya di sebuah situs jargon-jargon mereka akan muncul di paling atas sebuah halaman dan ditandai dengan tulisan dailywins.</p>
        <p>Itu bisa menjadi referensi pada saat bermain atau pun bingung ingin memilih yang mana jenis slotnya. Dan selanjutnya nanti ketika kita sudah masuk ke dalam sebuah situs slotkita akan di hadapkan dengan layar di smartphone atau tablet anda yang isinya berbaga macam bentuk dan tanda + dan tanda - untuk mengatur nilai taruhan yang akan kita mainkan.</p>
        <p>Dan langkah selanjutnya anda tinggal menekan tanda play yang ditandai dengan berputar atau bergantinya gambar di mesin slot tersebut di layar smartphone dan tablet yang anda gunakan. Semakin tinggi nilai taruhan anda maka akan semakin besar juga nilai kemenangan yang akan anda dapatkan.</p>

        <h2>Permainan Apa Saja Yang Ada Di <em>Slot Online?</em></h2>
        <p>Permainan yang akan kita jumpai di <a style="color: #9a0f06;" href="">slot online</a> itu cukup beragam, namun biasanya kita akan menjumpai 5-8 motif disebuah mesin slot yang dimana kita hanya perlu mencari 8 item untuk 1 motif yang sama pada sebuah putaran slot.</p>
        <p>Dan ketika kita sudah mendaptkan 8 item yang sama, maka nilai trauhan kita akan digandakan berdasarkan perklaian dari sebuah permaianna tersebut. Ada yang nilai pembayarannya berdasarkan logaritma ada juga yang system acak dan ada juga yang hanya mencari sebuah pola yang sama pada sebuah permainan.</p>

        <h2>Ada Berapa <em>Jenis Slot</em> Online Disebuah Situs?</h2>
        <p>Berikut merupakan daftar 20 provider <a style="color: #9a0f06;" href="">slot gacor</a> di situs bandar online Tangan Judi.</p>
        <ol>
          <li><a style="color: #9a0f06;" href="https://www.pragmaticplay.com/id" rel="noopener noreferrer" target="_blank">Pragmatic Play</a></li>
          <li>Microgaming</li>
          <li>PG Slots</li>
          <li>Live22</li>
          <li>Slot88</li>
          <li>Ionslot</li>
          <li>Joker</li>
          <li>Advantplay</li>
          <li>Spadegaming</li>
          <li>Gamatron</li>
          <li>JDB</li>
          <li>Playtech</li>
          <li>Habanero</li>
          <li>CQ9</li>
          <li>YGdrasil</li>
          <li>Playngo</li>
          <li>Onetouch</li>
          <li>Realtime Gaming</li>
          <li>Flowgaming</li>
          <li>Astrogaming</li>
        </ol>

        <h2>Istilah-istilah Dalam <em>Dunia Slot</em></h2>
        <p>Simak istilah-itilah yang sering dipakai para slotter berikut:</p>
        <ul>
          <li><strong>Slotermania</strong>: sebutan untuk para pemain slot.</li>
          <li><strong>Slot Veteran</strong>: sebutan untuk para pemain slot yang sudah cukup lama bermain.</li>
          <li><strong>Gacor</strong>: gampang bocor, biasanya marketing dari sebuah situs memberikan info kepada para pemainnya di permainan apa aja yang lagi gampang banget kasih kemenangan.</li>
          <li><strong>Bocoran</strong>: biasanya para pemain-pemain yang sudah daftar disebuah situs akan menanyakan bocoran yang bagus di permainan apa yang bagus jika ingin bermain.</li>
          <li><strong>RTP</strong>: Return To Player adalah sebuah bocoran pada permainan slot yang biasanya berupa angka persenan berupa angka dari 10-100% untuk sebuah permainan. Semakin tinggi nilai persenan pada sebuah permainan, maka dipercaya kemenangan mudah didapatkan.</li>
          <li><strong>Deposit</strong>: nilai uang yang pemain masukan ke sebuah akun yang sudah terdaftar. Biasanya para pemain menggunakan metode transfer antar bank atau via pulsa untuk mengisi saldo.</li>
          <li><strong>Withdraw</strong>: penarikan sejumlah uang jika anda berhasil memenangkan permainan tersebut.</li>
          <li><strong>TO</strong>: Turn Over adalah syarat sebuah bonus yang akan diberikan kepada para pemain jika disitus tersebut menawarkan sejumlah bonus untuk menarik minat para pemain dan para pemain harus bisa memenuhi syarat TO tersebut jika ingin mendapatkan nilai bonus yang ditawarkan. Biasanya TO yang diberikan beragam tergantung kebijakan dari situs tersebut. So kalian para sloter jangan sampai lengah dalam memahami tawaran TO ya.</li>
          <li><strong>Bonus Cashback</strong>: kembalian kekalahan dari total kekalahan selama bermain. Jangka waktu yang diberikan biasanya satu minggu dari waktu pertama kali anda bermain.</li>
          <li><strong>Bonus Komisi</strong>: tambahan kemenangan dari total kemenangan anda selama bermain. Jangka waktu yang diberikan juga biasanya satu minggu dari waktu anda pertama kali bermain.</li>
        </ul>

        <h2>Kesimpulan</h2>
        <p>Tidaklah heran jika judi slot online dinobatkan sebagai permainan judi yang cukup banyak dimainkan dan digandrungi para slotermania (sebutan untuk pemain slot) sejak dua dekade lalu menduduki peringkat pencarian judi paling ramai dan seru yang dibicarkan para sloter dunia.</p>
        <p>Selain cara permainannya yang cukup unik dan beragam, mesin slot juga cara memainkannya cukup cepat dipahami bahkan oleh orang yang baru mengenal dunia slot. Karena itu cocok rasanya jika slot yang kita kenal sekarang menjadi sebuah ajang bergengsi yang dimana ajang tersebut layak untuk dicoba dan dimainkan.</p>
        <p>Bagi anda yang belum pernah mencoba memainkannya, mimin sarankan segera bergabung di <a style="color: #9a0f06;" href="">Tangan Judi</a> situs online terpercaya dan pilih permainan slot favorit kamu ya. Dan tidak lupa, salam JP untuk anda!!</p>'
        ]);
    }
}
