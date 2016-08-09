<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#A").click(function(){
        return '<select class="form-control" name="pelanggaran">'
        	+'		<option value="1">Terlambat masuk jam pertama.</option>'
        	+'		<option value="2">Terlambat masuk setelah istirahat pertama.</option>'
        	+'		<option value="3">Ijin keluar pada jam sekolah dan tidak kembali ke sekolah.</option>'
        	+'		<option value="4">Alpa.</option>'
        	+'		<option value="5">Tidak masuk dengan membuat surat keterangan palsu.</option>'
        	+'		<option value="6">Membolos.</option>'
        	+'		<option value="7">Tidak masuk kegiatan ekstrakurikuler tanpa keterangan.</option>'
        	+'		<option value="8">Tidak masuk kegiatan ekstrakurikuler pilihan tanpa keterangan.</option>'
        	+'		<option value="9">Sepeda motor tidak standar.</option>'
        	+'		<option value="10">Membawa Handphone.</option>'
        	+'		<option value="11">Tidak mematikan dan tidak menuntun motor di lingkungan sekolah.</option>'
        	+'		<option value="12">Tidak ikut upacara.</option>'
        	+'		<option value="13">Keluar/masuk kampus tanpa ijin.</option>'
        	+'		<option value="14">Tidak menjalankan konpensasi yang di berikan sekolah setiap hari.</option>'
        	+'		<option value="15">Tidakmelaksanakan tugas sekolah.</option>'
        	+'	</select>'
    });
    $("#A").click(function(event){
        $("#pelanggaran-list").html(event.result);
    });  
});
</script>
<script>
$(document).ready(function(){
    $("#B").click(function(){
        return '<select class="form-control" name="pelanggaran">'
        	+'		<option value="1">Tidak memakai seragam sesuai jadwal dan ketentuan sekolah.</option>'
        	+'		<option value="2">Berpakaian seragam tidak rapi dan tidak lengkap.</option>'
        	+'		<option value="3">Tidak memakai topi pada waktu upacara.</option>'
        	+'		<option value="4">Memakai topi bukan seragam di lingkungan sekolah.</option>'
        	+'		<option value="5">Memakai sandal/sepatu sandal.</option>'
        	+'		<option value="6">Tidak memakai sepatu dan atau kaos kaki  dan ikat pinggang sesuai ketentuan sekolah.</option>'
        	+'		<option value="7">Membawa tas tidak sesuai ketentuan sekolah.</option>'
        	+'		<option value="8">Memakai jaket/sweeter kecuali karena sakit.</option>'
        	+'	</select>'
    });
    $("#B").click(function(event){
        $("#pelanggaran-list").html(event.result);
    });  
});
</script>
<script>
$(document).ready(function(){
    $("#C").click(function(){
        return '<select class="form-control" name="pelanggaran">'
        	+'		<option value="1">Berhias dan mengenakan perhiasan berlebihan bagi siswa putri.</option>'
        	+'		<option value="2">Mengenakan perhiasan bagi siswa putra.</option>'
        	+'		<option value="3">Bertato, bertindik (tidik ganda bagi siswa putri).</option>'
        	+'		<option value="4">Berambut panjang tidak sesuai ketentuan sekolah.</option>'
        	+'		<option value="5">Rambut dicat.</option>'
        	+'		<option value="6">Mengeluarkan kata-kata kotor/tidak senonoh pada sesama siswa.</option>'
        	+'		<option value="7">Mengeluarkan kata-kata kotor/tidak senonoh kepada Kepala Sekolah, guru/karyawan, tamu dan perangkat sekolah lainnya.</option>'
        	+'		<option value="8">Mencemarkan nama baik sekolah.</option>'
        	+'		<option value="9">Mencuri.</option>'
        	+'		<option value="10">Menipu.</option>'
        	+'		<option value="11">Terbukti berbuat asusila.</option>'
        	+'		<option value="12">Memalsukan tanda tangan kepala sekolah.</option>'
        	+'		<option value="13">Memalsukan tanda tangan guru/karyawan/instansi.</option>'
        	+'		<option value="14">Memalsukan tanda tangan orang tua.</option>'
        	+'		<option value="15">Memalsukan tanda tangan teman.</option>'
        	+'		<option value="16">Berjudi.</option>'
        	+'		<option value="17">Menerobos pagar sekolah.</option>'
        	+'	</select>'
    });
    $("#C").click(function(event){
        $("#pelanggaran-list").html(event.result);
    });  
});
</script>
<script>
$(document).ready(function(){
    $("#D").click(function(){
        return '<select class="form-control" name="pelanggaran">'
        	+'		<option value="1">Membawa rokok di sekolah.</option>'
        	+'		<option value="2">Menghisap rokok di lingkungan sekolah.</option>'
        	+'		<option value="3">Menghisap rokok di luar lingkungan sekolah, berpakaian seragam sekolah.</option>'
        	+'	</select>'
    });
    $("#D").click(function(event){
        $("#pelanggaran-list").html(event.result);
    });  
});
</script>
<script>
$(document).ready(function(){
    $("#E").click(function(){
        return '<select class="form-control" name="pelanggaran">'
        	+'		<option value="1">Membawa buku majalah, suratkabar, CD atau film porno.</option>'
        	+'		<option value="2">Memperjualbelikan atau meminjamkan buku, majalah, kaset, CD, film atau foto porno.</option>'
        	+'		<option value="3">Menonton / melihat buku, majalah, surat kabar, tabloid, kaset, CD, film atau foto porno.</option>'
        	+'		<option value="4">Membawa, menjual, mengedarkan, memakai barang-barang yang bertentangan dengan norma kehidupan bersekolah, bermasyarakat dan bernegara.</option>'
        	+'	</select>'
    });
    $("#E").click(function(event){
        $("#pelanggaran-list").html(event.result);
    });  
});
</script>
<script>
$(document).ready(function(){
    $("#F").click(function(){
        return '<select class="form-control" name="pelanggaran">'
        	+'		<option value="1">Menbawa senjata tajam/api di lingkungan sekolah.</option>'
        	+'		<option value="2">Menjual belikan senjata tajam/api, di lingkungan sekolah.</option>'
        	+'		<option value="3">Menggunakan senjata tajam/api untuk mengancam, melukai orang lain.</option>'
        	+'	</select>'
    });
    $("#F").click(function(event){
        $("#pelanggaran-list").html(event.result);
    });  
});
</script>
<script>
$(document).ready(function(){
    $("#G").click(function(){
        return '<select class="form-control" name="pelanggaran">'
        	+'		<option value="1">Membawa narkoba/miras ke sekolah.</option>'
        	+'		<option value="2">Menggunakan nartkoba/miras di dalam maupun di luar lingkungan sekolah.</option>'
        	+'		<option value="3">Menjual narkoba/miras di dalam maupun di luar lingkungan sekolah.</option>'
        	+'	</select>'
    });
    $("#G").click(function(event){
        $("#pelanggaran-list").html(event.result);
    });  
});
</script>
<script>
$(document).ready(function(){
    $("#H").click(function(){
        return '<select class="form-control" name="pelanggaran">'
        	+'		<option value="1">Menjadi profokator perkelahian.</option>'
        	+'		<option value="2">Sikap bermusuhan yang berdampak negatif.</option>'
        	+'		<option value="3">Berkelahi/tawuran antar siswa SMKN2Wonosari dan tidak berdampak luas.</option>'
        	+'		<option value="4">Berkelahi/tawuran antar siswa SMKN2Wonosari dan berdampak luas.</option>'
        	+'		<option value="5">Berkelahi/tawuran dengan siswa sekolah lain.</option>'
        	+'		<option value="6">Menonton perkelahian siswa SMKN2Wonosari.</option>'
        	+'	</select>'
    });
    $("#H").click(function(event){
        $("#pelanggaran-list").html(event.result);
    });  
});
</script>
<script>
$(document).ready(function(){
    $("#I").click(function(){
        return '<select class="form-control" name="pelanggaran">'
        	+'		<option value="1">Mengintimidasi/mengancam kepala sekolah, guru, pegawai.</option>'
        	+'		<option value="2">Menganiaya, mengeroyok kepala sekolah, guru, pegawai.</option>'
        	+'		<option value="3">Mengintimidasi/mengancam teman.</option>'
        	+'	</select>'
    });
    $("#I").click(function(event){
        $("#pelanggaran-list").html(event.result);
    });  
});
</script>
<script>
$(document).ready(function(){
    $("#J").click(function(){
        return '<select class="form-control" name="pelanggaran">'
        	+'		<option value="1">Mengotori, corat-coret milik sekolah, guru, pegawai, teman, tamu atau siswa di lingkungan sekolah.</option>'
        	+'		<option value="2">Merusak benda milik sekolah, guru, pegawai, teman, dan atau siswa di lingkungan sekolah.</option>'
        	+'		<option value="3">Membuat kegaduhan saat KBM.</option>'
        	+'	</select>'
    });
    $("#J").click(function(event){
        $("#pelanggaran-list").html(event.result);
    });  
});
</script>