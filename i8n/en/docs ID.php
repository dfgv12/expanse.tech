<?php
//Expanse Internationalzation Language File - English : Docs 
//Version: 0.0.1

// Documentation : User Guide : Menu
$i8n['userguide_header']='Panduan pengguna';
$i8n['userguide_menu_install']='Instalasi';
$i8n['userguide_menu_backup']='Back up &amp; Pengembalian';
$i8n['userguide_menu_mining']='Munai menambang dengan cepat';
$i8n['userguide_menu_accounts']='mengatur akun';
$i8n['userguide_menu_tx']='Mengirim transaksi';
				
// Documentation : User Guide : Installation
$i8n['userguide_install_title']='Instalasi';
$i8n['userguide_install_download_title']='Download';
$i8n['userguide_install_download_desc']='Download Expanse untuk platform pilihan Anda';
$i8n['userguide_install_run_cmd_title']='Menjalankan Expanse - Command Line';
$i8n['userguide_install_run_desc']='Expanse dapat dijalankan dari baris perintah (grep), atau melalui klien dompet grafis(expwallet).';
$i8n['userguide_install_run_cmd']='Untuk menjalankan gexp dari baris perintah, menavigasi konsol Anda ke direktori memegang executable gexp dan jalankan perintah gexp.';
$i8n['userguide_install_args']='Anda mungkin menambahkan berbagai perintah dan argumen pilihan untuk menyesuaikan contoh Expanse seperti <code> console </code> (untuk memulai dengan interaktif javascript console), <code> - berturut turut </code> (untuk meningkatkan detail dari output) , atau <code> - rpcport </code> (untuk menentukan port RPC). Informasi lengkap mengenai argumen ini dapat ditemukan di <a href="https://github.com/expanse-project/go-expanse/wiki/Command-Line-Options">Expanse Wiki : Command Line Options</a>.';
$i8n['userguide_install_example']='Contoh';
$i8n['userguide_install_attach']='Untuk melampirkan konsol ke sebuah contoh sudah berjalan dari regex, termasuk argumen &quot;attach&quot;.';
$i8n['userguide_install_rungui_title']='Menjalankan Expanse - EXPWallet GUI';
$i8n['userguide_install_rungui']='Untuk jalanlan expanse GUI,  hanya menjalankan executable expwallet. Jika Anda sudah menjalankan sebuah instance dari gexp, berjalan expwallet akan melampirkan sendiri ke contoh. Jika Anda tidak memiliki sebuah instance dari gexp berjalan, akan meluncurkan sebuah instance internal gexp.';
$i8n['userguide_install_firstrun_title']='Pertama Run/Install';
$i8n['userguide_install_firstrun_desc']='Pertama kali menjalankan expanse,Anda akan diminta untuk menyetujui perjanjian pengguna. Expanse akan memeriksa bawaan atau datadir yang ditentukan untuk file pra-exsisting, dan jika ada yang tidak ditemukan, itu akan membuat mereka. Disarankan Anda sekarang Buat Akun jika Anda belum melakukannya.';

// Documentation : User Guide : Backing Up &amp; Restoring
$i8n['userguide_backup_title']='Back up &amp; Restoring';
$i8n['userguide_backup_dataloc']='Lokasi Data';
$i8n['userguide_backup_loc']='Wallets/Accounts disimpan dalam Folder Keystore dalam Expanse\'s Data Directory.';
$i8n['userguide_backup_locos']='Lokasi direktory ini akan default per OS:';
$i8n['userguide_backup_datadir']='Hal ini dimungkinkan untuk menentukan direktori dengan <code> - datadir </code> parameter ketika meluncurkan dompet. ';
$i8n['userguide_backup_wallet']='Wallet/Account Backup';
$i8n['userguide_backup_walletdesc']='Untuk membuat cadangan dompet Anda dan rekening hanya menyimpan salinan folder keystore (atau isinya) ke lokasi lain.';
$i8n['userguide_backup_restore']='Wallet/Account Restore';
$i8n['userguide_backup_restoredesc']='Untuk mengembalikan dompet Anda, menyalin isi dari cadangan keystore Anda ke folder keystore di direktori data Expanse.';


// Documentation : User Guide : Mining Quick Start
$i8n['userguide_mining_title']='Mining Quick Start';
$i8n['userguide_mining_desc']='Pertambangan dapat dilakukan secara internal, atau dengan alat pihak ketiga.';
$i8n['userguide_mining_cpu']='CPU Mining Dengan GEXP';
$i8n['userguide_mining_cpudesc']='Anda dapat melakukan gexp dengan cara mengaktifkan pertambangan dengan menggunakan <code> - saya </code> argumen ketika meluncurkan gexp. Anda dapat menetapkan jumlah thread cpu yang digunakan dalam pertambangan dengan <code> - minerthreads </code> argumen';
$i8n['userguide_mining_cmd']='Anda juga dapat memulai dan menghentikan penambang langsung dari konsol exp dengan miner.start dan miner.stop perintah.';
$i8n['userguide_mining_ethminer']='GPU Mining dengan Ethminer';
$i8n['userguide_mining_cors']='Hal ini memererlukan rpc diaktifkan dan kor rpc domain memungkinkan akses localdomain.';

// Documentation : User Guide : Managing Accounts
$i8n['userguide_accounts_title']='Mengatur AAkun';
$i8n['userguide_accounts_create_title']='membuat akun baru';
$i8n['userguide_accounts_create_run']='Membuat akun di untuk menjalankan Consol Expanse, jalankan perintah';
$i8n['userguide_accounts_create_desc']='Buat akun menggunakan gimp dari konsol asli Anda, jalankan perintah akun baru Geth, dan Anda akan diminta untuk password.';
$i8n['userguide_accounts_create_warn']='Metode kedua ini tidak dianjurkan karena dapat meninggalkan catatan sandi Anda di log konsol.';
$i8n['userguide_accounts_delete_title']='Menghapus akun';
$i8n['userguide_accounts_delete_desc']='Akun tidak dapat dihapus dari dalam klien atau konsol. Untuk Menghapus akun, menghapus file yang terkait dengan akun dari folder keystore. Hati-hati untuk tidak menghapus file lainnya. Dianjurkan untuk membuat cadangan semua kunci dibuat dengan dompet Anda. Harap berhati ekstra hati-hati untuk memverifikasi Anda hanya menghapus kunci.';
// Documentation : User Guide : Sending Transactions
$i8n['userguide_sending_title']='Mengirim transaksi';
$i8n['userguide_sending_gexp_title']='Mengirim transaksi dari GEXP';
$i8n['userguide_sending_gexp_desc']='Untuk mengirim transaksi dari gimp, menggunakan konsol perintah exp.sendTransaction, mengganti dari dan ke alamat rekening dengan pengirim yang diinginkan dan penerima alamat masing-masing:';
$i8n['userguide_sending_gexp_example']='Contoh: mengirim 1 EXP ke akun 0x00 Dari akun 0x00.';
$i8n['userguide_sending_wallet_title']='Mengirim transaksi dari EXPWallet';
$i8n['userguide_sending_wallet_desc']='Untuk mengirim transaksi menggunakan xpwallet, cukup klik tab Transaksi, pilih alamat yang Anda ingin mengirim dari, masukkan alamat, jumlah (dan gas, jika diinginkan) dan klik Kirim.';
?>
