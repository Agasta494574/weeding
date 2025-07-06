<?php
// PHP Variables for dynamic content - You can change these values
$groom_name = "Neo";
$bride_name = "Galeh";
$groom_parents = "Bapak Jenal Mutakin & Ibu Eni Lestari";
$bride_parents = "Bapak Sardi Maryanto & Ibu Erni";

$akad_date = "Minggu, 2 Februari 2025";
$akad_time = "08:00 WIB";
$akad_location = "Kediaman Mempelai Wanita";
$akad_address = "Jl. Contoh No. 123, Kota Anda, Provinsi Anda"; // Add specific address if needed
$akad_map_link = "https://maps.app.goo.gl/exampleakad"; // Replace with actual Google Maps link

$resepsi_date = "Minggu, 9 Februari 2025";
$resepsi_time = "10:00 WIB - Selesai";
$resepsi_location = "Wisma Dewa Dewi";
$resepsi_address = "Jl. Contoh Resepsi No. 456, Kota Anda, Provinsi Anda"; // Add specific address if needed
$resepsi_map_link = "https://maps.app.goo.gl/examplerecepsion"; // Replace with actual Google Maps link

$livestream_date = "Minggu, 29 Desember 2024"; // Example for earlier livestream
$livestream_time = "10:00 WIB";
$livestream_link = "https://youtube.com/your_livestream_channel"; // Replace with your actual livestream link

$bank_name = "Bank BCA";
$account_number = "0790488580";
$account_name = "Santoso Saputro";
$gift_recipient = "Habib Yulianto"; // For physical gifts/confirmation

$instagram_groom = "https://instagram.com/neo_ig"; // Replace with actual IG
$instagram_bride = "https://instagram.com/galeh_ig"; // Replace with actual IG

$whatsapp_punakawan = "https://wa.me/6281234567890"; // Example WA number
$instagram_punakawan = "https://instagram.com/punakawandigital"; // Example IG
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Undangan Pernikahan <?php echo $groom_name; ?> & <?php echo $bride_name; ?></title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Sacramento&display=swap" rel="stylesheet">
</head>
<body>
    <header class="hero-section">
        <div class="hero-content">
            <p>The Wedding Of</p>
            <h1><?php echo $groom_name; ?> & <br><?php echo $bride_name; ?></h1>
            <p class="date-hero"><?php echo $akad_date; ?></p>
            <a href="#invitation-content" class="btn-open-invitation">Buka Undangan</a>
        </div>
    </header>

    <main id="invitation-content" class="main-content">
        <section class="intro-section">
            <p class="greeting">Assalamu'alaikum Warahmatullahi Wabarakatuh</p>
            <p>Dengan memohon rahmat dan ridho Allah SWT, kami bermaksud mengundang Bapak/Ibu/Saudara/i untuk hadir dalam acara pernikahan putra-putri kami:</p>
            <div class="couple-names">
                <h2><?php echo $groom_name; ?></h2>
                <p>Putra pertama dari Bapak <?php echo str_replace('&', 'dan Ibu', $groom_parents); ?></p>
                <a href="<?php echo $instagram_groom; ?>" target="_blank">@<?php echo explode(' ', $groom_name)[0]; ?></a>
            </div>
            <p class="ampersand">&</p>
            <div class="couple-names">
                <h2><?php echo $bride_name; ?></h2>
                <p>Putri pertama dari Bapak <?php echo str_replace('&', 'dan Ibu', $bride_parents); ?></p>
                <a href="<?php echo $instagram_bride; ?>" target="_blank">@<?php echo explode(' ', $bride_name)[0]; ?></a>
            </div>
            <p class="verse">
                "Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untukmu istri-istri dari jenismu sendiri, supaya kamu cenderung dan merasa tenteram kepadanya, dan dijadikan-Nya di antaramu rasa kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda bagi kaum yang berpikir."
                <br> <small>(QS. Ar-Rum: 21)</small>
            </p>
        </section>

        <section class="event-section">
            <h3>Akad Nikah</h3>
            <p class="event-detail">Hari/Tanggal: <?php echo $akad_date; ?></p>
            <p class="event-detail">Waktu: <?php echo $akad_time; ?></p>
            <p class="event-detail">Lokasi: <?php echo $akad_location; ?></p>
            <p class="event-address"><?php echo $akad_address; ?></p>
            <a href="<?php echo $akad_map_link; ?>" target="_blank" class="btn-map">Lihat di Google Maps</a>
            
            <br><br>

            <h3>Resepsi</h3>
            <p class="event-detail">Hari/Tanggal: <?php echo $resepsi_date; ?></p>
            <p class="event-detail">Waktu: <?php echo $resepsi_time; ?></p>
            <p class="event-detail">Lokasi: <?php echo $resepsi_location; ?></p>
            <p class="event-address"><?php echo $resepsi_address; ?></p>
            <a href="<?php echo $resepsi_map_link; ?>" target="_blank" class="btn-map">Lihat di Google Maps</a>

            <?php if (!empty($livestream_link)) : ?>
            <div class="livestream-info">
                <h4>Live Streaming</h4>
                <p>Tidak bisa hadir? Saksikan melalui live streaming:</p>
                <p><?php echo $livestream_date; ?>, <?php echo $livestream_time; ?></p>
                <a href="<?php echo $livestream_link; ?>" target="_blank" class="btn-livestream">Tonton di YouTube</a>
            </div>
            <?php endif; ?>
        </section>

        <section class="gift-section">
            <h3>Amplop Digital</h3>
            <p>Doa restu Anda adalah karunia yang sangat berarti bagi kami. Namun, jika Anda ingin memberikan tanda kasih, Anda bisa melalui transfer bank:</p>
            <div class="bank-details">
                <p><strong><?php echo $bank_name; ?></strong></p>
                <p>No. Rekening: <span><?php echo $account_number; ?></span></p>
                <p>Atas Nama: <span><?php echo $account_name; ?></span></p>
                <button class="btn-copy-rek" data-account="<?php echo $account_number; ?>">Salin Nomor Rekening</button>
            </div>
            <p>Untuk konfirmasi pengiriman hadiah fisik/parcel, bisa menghubungi: <?php echo $gift_recipient; ?></p>
        </section>

        <section class="wishes-rsvp-section">
            <h3>Kirim Ucapan & Konfirmasi Kehadiran</h3>
            <form id="rsvp-form">
                <input type="text" name="guest_name" placeholder="Nama Anda" required>
                <textarea name="message" placeholder="Tuliskan ucapan dan doa terbaik Anda..." rows="4" required></textarea>
                <select name="attendance" required>
                    <option value="">Akan Hadir / Tidak Hadir?</option>
                    <option value="hadir">Akan Hadir</option>
                    <option value="tidak_hadir">Tidak Hadir</option>
                </select>
                <button type="submit" class="btn-submit-rsvp">Kirim</button>
            </form>
            <div id="rsvp-message" style="margin-top: 10px; color: green;"></div>
        </section>

        <footer class="footer">
            <p>"Terima kasih atas perhatian dan doa restu Bapak/Ibu/Saudara/i sekalian."</p>
            <p>Hormat kami,</p>
            <p class="couple-names-footer"><?php echo $groom_name; ?> & <?php echo $bride_name; ?></p>
            <div class="credit">
                <p>Made with ❤️ by Punakawan Digital Inspired</p>
                <a href="<?php echo $instagram_punakawan; ?>" target="_blank">Instagram</a> | 
                <a href="<?php echo $whatsapp_punakawan; ?>" target="_blank">WhatsApp</a>
            </div>
        </footer>
    </main>

    <script src="script.js"></script>
</body>
</html>