<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>Komikmu</title>
  <link rel="stylesheet" href="/css/styles.css">
  <link rel="stylesheet" href="/css/addon.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" integrity="sha512-i8+QythOYyQke6XbStjt9T4yQHhhM+9Y9yTY1fOxoDQwsQpKMEpIoSQZ8mVomtnVCf9PBvoQDnKl06gGOOD19Q==" crossorigin="anonymous" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta property="og:image" content="https://basiclearns.software/komik.jpg">
  <meta property="og:title" content="Komikmu">
  <meta name="description" content="Modal Jiplak">
  <meta property="og:type" content="website">
  <meta property="og:description" content="Belajar dari ide siapapun">
  <link rel="icon" type="image/png" href="/asset/komik.jpg">
</head>

<body>
  <header>
    <h1>Komikmu</h1>
    <nav>
      <ul>
        <li><a href="?">Home</a></li>
        <li><a href="?page=tamat">Tamat</a></li>
        <li><a href="?page=genre">Genre</a></li>
      </ul>
    </nav>
    <div class="bookmark"><a href="javascript:void(0);"><img src="/asset/star-icon.png"></img></a></div>
  </header>
  <main>
    <!---
    <section class="featured-comic">
      <img src="/asset/Solo-Leveling-1.png" alt="Featured Comic">
      <p>Mengambil latar di dunia dimana muncul “Gate” yang menghubungkan antara dunia monster dan dunia manusia. Sejak
        Gate muncul, beberapa orang yang menerima kemampuan khusus atau disebut sebagai “Hunter” akan bertugas membasmi
        monster yang ada di dalam Gate. </p>
      <a href="#">Baca selengkapnya</a>
    </section>
    <section class="latest-comics">
      <div class="comic">
        <img src="/asset/max-level-hero.webp" alt="Latest Comic 1">
        <h3>Max Level Hero has Returned</h3>
        <p>Bercerita tentang Pangeran lemah dari negara yang tidak penting, Davey. Setelah koma, jiwanya melarikan diri
          ke kuil tempat jiwa para pahlawan berkumpul. Dia berlatih selama seribu tahun dan sekarang telah kembali
          sebagai pahlawan level maksimal! “Tunggu saja, aku akan menghadapi kalian semua langsung!” Kisah menyegarkan
          kehidupan kerajaan dan balas dendam Davey baru saja dimulai.</p>
        <a href="#">Baca selengkapnya</a>
      </div>
      <div class="comic">
        <img src="/asset/gintama.png" alt="Latest Comic 2">
        <h3>Gintama the Final</h3>
        <p>'Utsuro', yang memiliki kepribadian berbeda dari Shoyo Yoshida, guru yang sangat dihormati dan membimbing
          jalan klan Gintoki. Untuk membantu klan Gintoki, Shinpachi, Kagura, Shinsengumi, penduduk di distrik Kabuki
          dan bahkan rival lama ikut ambil bagian dalam pertempuran.</p>
        <a href="#">Baca selengkapnya</a>
      </div>
      <div class="comic">
        <img src="/asset/oregairu.jpg" alt="Latest Comic 3">
        <h3>My Teen Romantic Comedy</h3>
        <p>Dua pelajar SMA, Hachiman dan Yukino, yang dipaksa oleh guru mereka untuk bergabung di klub relawan. Dalam
          klub itu, mereka harus menolong setiap orang yang datang dan meminta bantuan.</p>
        <a href="#">Baca selengkapnya</a>
      </div>
    </section>
    <a href="javascript:" class="top" id="return-to-top"><i class="icon-chevron-up"></i></a>
-->
        <table class="table">
          <thead>
            <tr>
              <th>id</th>
              <th>nama</th>
              <th>author</th>
              <th>image</th>
              <th>harga</th>
              <th>deskripsi</th>
              <th>date rilis</th>
          </thead>
        <tbody class="table">
        <?php $harga = 0 ?>
        @foreach($data as $list)
        <tr>
            <td>{{$list->id}}</td>
            <td>{{$list->nama_komik}}</td>
            <td>{{$list->author_komik}}</td>
            <td>{{$list->img_komik}}</td>
            <td>{{$list->harga}}</td>
            <td>{{$list->desc_komik}}</td>
            <td>{{$list->date_komik}}</td>
            <?php $harga += $list->harga ?>
        </tr>
        @endforeach
        <tr>
          <td>Harga TOTAL</td>
          <td>
            Rp. {{$harga}}
          </td>
        </tr>
        </tbody>
        </table>
  </main>
  <footer>
    <p>&copy; Komikmu 2023</p>
  </footer>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='/js/scroll.js'></script>
</body>
</html>