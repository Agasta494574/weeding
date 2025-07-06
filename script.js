document.addEventListener('DOMContentLoaded', function() {
    // Smooth scroll for "Buka Undangan" button
    const openInvitationBtn = document.querySelector('.btn-open-invitation');
    const invitationContent = document.getElementById('invitation-content');

    if (openInvitationBtn && invitationContent) {
        openInvitationBtn.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Tambahkan kelas ke body untuk memicu perubahan CSS
            document.body.classList.add('invitation-open');

            // Gulir ke bagian undangan utama setelah transisi main-content selesai
            // Timeout harus lebih panjang atau sama dengan durasi transisi 'top' di CSS
            setTimeout(() => {
                // Gulir ke bagian paling atas halaman untuk melihat konten utama
                window.scrollTo({ top: 0, behavior: 'smooth' });
                // Jika ingin gulir tepat ke #invitation-content, gunakan ini:
                // invitationContent.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }, 1000); // Sesuaikan dengan durasi transisi di CSS (1s = 1000ms)
        });
    }

    // Copy Account Number functionality
    const copyRekBtn = document.querySelector('.btn-copy-rek');
    if (copyRekBtn) {
        copyRekBtn.addEventListener('click', function() {
            const accountNumber = this.dataset.account;
            navigator.clipboard.writeText(accountNumber)
                .then(() => {
                    alert('Nomor rekening berhasil disalin: ' + accountNumber);
                })
                .catch(err => {
                    console.error('Gagal menyalin nomor rekening: ', err);
                    alert('Gagal menyalin nomor rekening. Silakan salin manual: ' + accountNumber);
                });
        });
    }

    // Basic form submission (without server-side processing yet)
    const rsvpForm = document.getElementById('rsvp-form');
    const rsvpMessage = document.getElementById('rsvp-message');

    if (rsvpForm && rsvpMessage) {
        rsvpForm.addEventListener('submit', function(e) {
            e.preventDefault(); // Prevent default form submission

            // In a real application, you would send this data to a PHP script
            // using fetch() or XMLHttpRequest for server-side processing and database storage.

            const guestName = rsvpForm.querySelector('[name="guest_name"]').value;
            const message = rsvpForm.querySelector('[name="message"]').value;
            const attendance = rsvpForm.querySelector('[name="attendance"]').value;

            console.log('Form Submitted:', { guestName, message, attendance });

            rsvpMessage.textContent = 'Terima kasih, ucapan Anda telah kami terima!';
            rsvpMessage.style.color = 'green';
            rsvpForm.reset(); // Clear the form

            // You can also disable the form or show a success state more elegantly
        });
    }
});