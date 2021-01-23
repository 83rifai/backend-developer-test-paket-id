## Dokumentasi

### Documentation API

-   document-api.json

### Perbedaan antara PUT dan PATCH

PUT dan PATCH request merupakan kata kerja dalam HTTP, dimana keduanya sama sama digunakan untuk memperbaharui resource.

-   PUT request, entitas terlampir dianggap sebagai versi modifikasi dari resource server asal, dan klien meminta agar versi yang disimpan diganti.
-   PATCH request, bagaimanapun, entitas terlampir berisi serangkaian instruksi yang menggambarkan bagaimana sumber daya yang saat ini berada di server asal harus dimodifikasi untuk menghasilkan versi baru.
-   Jika ketika kita ingin memperbarui sebuah resource dengan permintaan PUT, maka kita harus mengirim seluruh sebagai permintaan sedangkan dengan PATCH, Anda hanya mengirim parameter yang ingin Anda perbarui.
