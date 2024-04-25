@extends('index')
@section('content')
<div class="container" style="margin-bottom:100px;">
    <div class="container">
        <h1 style="text-align: center; margin-top:30px">Produk dan Jasa Kami</h1>

        <div class="produk-section">
            <h2>Produk</h2>
            <p>Kami menyediakan berbagai produk yang dapat memenuhi kebutuhan para pecinta motor, termasuk:</p>
            <ul class="produk-list">
                <li>Motor: Sepeda motor baru dan bekas dari berbagai model.</li>
                <li>Suku Cadang: Berbagai suku cadang dan aksesori untuk motor.</li>
                <li>Perlengkapan Berkendara: Helm, jaket, sarung tangan, dan perlengkapan berkendara lainnya.</li>
            </ul>
        </div>

        <div class="produk-section">
            <h2>Jasa</h2>
            <p>Kami juga menyediakan berbagai jasa untuk mendukung pengalaman berkendara para anggota Miles Club, antara lain:</p>
            <ul class="produk-list">
                <li>Service Motor: Layanan perawatan dan perbaikan untuk motor.</li>
                <li>Penjualan Motor: Bantuan dalam pembelian motor baru dan proses penjualan motor bekas.</li>
                <li>Konsultasi Otomotif: Konsultasi tentang pemeliharaan motor dan saran teknis.</li>
                <li>Berbagi Ilmu: Menyediakan sesi pelatihan dan workshop untuk berbagi pengetahuan tentang motor, keselamatan berkendara, dan perawatan kendaraan.</li>
            </ul>
        </div>
    </div>
    <h3 style="text-align: center; margin-top:50px">Produk-Produk Kami</h3>
    <div class="row  mt-4">
        <div class="col-md-4">
            <div class="product-item">
                <img src="produk1.jpg" alt="Product 1" width="350px" height="200px" class="product-image" data-toggle="modal" data-target="#productModal1">
                <div class="product-details">
                    <h5 class="mt-2">PXSR 250CC</h5>
                    <div class="product-rating">
                        <span class="star" style="color: gold; font-size: 24px;">&#9733;</span>
                        <span class="star" style="color: gold; font-size: 24px;">&#9733;</span>
                        <span class="star" style="color: gold; font-size: 24px;">&#9733;</span>
                        <span class="star" style="color: gold; font-size: 24px;">&#9733;</span>
                        <span class="star" style="color: gold; font-size: 24px;">&#9733;</span> <!-- Contoh rating 5 dari 5 -->
                    </div>
                    <button class="btn btn-primary btn-block mt-2">Pesan</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="product-item">
                <img src="produk2.jpg" alt="Product 2" width="350px" height="200px" class="product-image" data-toggle="modal" data-target="#productModal2">
                <div class="product-details">
                    <h5 class="mt-2">XSR 150CC</h5>
                    <div class="product-rating">
                        <span class="star" style="color: gold; font-size: 24px;">&#9733;</span>
                        <span class="star" style="color: gold; font-size: 24px;">&#9733;</span>
                        <span class="star" style="color: gold; font-size: 24px;">&#9733;</span>
                        <span class="star" style="color: gold; font-size: 24px;">&#9733;</span>
                        <span class="star" style="color: gold; font-size: 24px;">&#9733;</span> <!-- Contoh rating 5 dari 5 -->
                    </div>
                    <button class="btn btn-primary btn-block mt-2">Pesan</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="product-item">
                <img src="produk3.jpg" alt="Product 3" width="350px" height="200px" class="product-image" data-toggle="modal" data-target="#productModal3">
                <div class="product-details">
                    <h5 class="mt-2">YZF R 15</h5>
                    <div class="product-rating">
                        <span class="star" style="color: gold; font-size: 24px;">&#9733;</span>
                        <span class="star" style="color: gold; font-size: 24px;">&#9733;</span>
                        <span class="star" style="color: gold; font-size: 24px;">&#9733;</span>
                        <span class="star" style="color: gold; font-size: 24px;">&#9733;</span>
                        <span class="star" style="color: gold; font-size: 24px;">&#9733;</span> <!-- Contoh rating 5 dari 5 -->
                    </div>
                    <button class="btn btn-primary btn-block mt-2">Pesan</button>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-5">
            <div class="product-item">
                <img src="produk4.jpg" alt="Product 4" width="350px" height="200px" class="product-image" data-toggle="modal" data-target="#productModal4">
                <div class="product-details">
                    <h5 class="mt-2">KLX 150</h5>
                    <div class="product-rating">
                        <span class="star" style="color: gold; font-size: 24px;">&#9733;</span>
                        <span class="star" style="color: gold; font-size: 24px;">&#9733;</span>
                        <span class="star" style="color: gold; font-size: 24px;">&#9733;</span>
                        <span class="star" style="color: gold; font-size: 24px;">&#9733;</span>
                        <span class="star" style="color: gold; font-size: 24px;">&#9733;</span> <!-- Contoh rating 5 dari 5 -->
                    </div>
                    <button class="btn btn-primary btn-block mt-2">Pesan</button>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-5">
            <div class="product-item">
                <img src="produk5.jpg" alt="Product 5" width="350px" height="200px" class="product-image" data-toggle="modal" data-target="#productModal5">
                <div class="product-details">
                    <h5 class="mt-2">Norton</h5>
                    <div class="product-rating">
                        <span class="star" style="color: gold; font-size: 24px;">&#9733;</span>
                        <span class="star" style="color: gold; font-size: 24px;">&#9733;</span>
                        <span class="star" style="color: gold; font-size: 24px;">&#9733;</span>
                        <span class="star" style="color: gold; font-size: 24px;">&#9733;</span>
                        <span class="star" style="color: gold; font-size: 24px;">&#9733;</span> <!-- Contoh rating 5 dari 5 -->
                    </div>
                    <button class="btn btn-primary btn-block mt-2">Pesan</button>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-5">
            <div class="product-item">
                <img src="produk6.jpg" alt="Product 6" width="350px" height="200px" class="product-image" data-toggle="modal" data-target="#productModal6">
                <div class="product-details">
                    <h5 class="mt-2">MT 15</h5>
                    <div class="product-rating">
                        <span class="star" style="color: gold; font-size: 24px;">&#9733;</span>
                        <span class="star" style="color: gold; font-size: 24px;">&#9733;</span>
                        <span class="star" style="color: gold; font-size: 24px;">&#9733;</span>
                        <span class="star" style="color: gold; font-size: 24px;">&#9733;</span>
                        <span class="star" style="color: gold; font-size: 24px;">&#9733;</span> <!-- Contoh rating 5 dari 5 -->
                    </div>
                    <button class="btn btn-primary btn-block mt-2">Pesan</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="productModal1" tabindex="-1" role="dialog" aria-labelledby="productModal1Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productModal1Label">XSR 250CC</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                amaha XSR 250, motor terbaru dari Yamaha, tampil dengan keunggulan mesin bertenaga dan desain yang memikat. 
                Mesin 4-tak berkapasitas 249 cc menjadi andalan, menghasilkan tenaga sebesar 30,9 hp pada 7.750 rpm dan 
                torsi maksimum 23,7 Nm pada 6.500 rpm.
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="productModal2" tabindex="-1" role="dialog" aria-labelledby="productModal2Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productModal2Label">XSR 150CC</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Yamaha XSR 155 adalah seri motor klasik yang dihadirkan oleh produsennya dengan mengusung konsep born to be free. 
                Sebagaimana konsep tersebut, tampilan motor ini memang tampak seperti motor lawas.
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="productModal3" tabindex="-1" role="dialog" aria-labelledby="productModal3Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productModal3Label">YZF R 15</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Yamaha YZF R15 Standard tersedia dengan harga Rp 37,55 Juta di Indonesia. Tersedia dalam 3 pilihan warna di Indonesia. 
                YZF R15 Standard digerakkan oleh mesin 155.1 cc dengan transmisi 6-Kecepatan.
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="productModal4" tabindex="-1" role="dialog" aria-labelledby="productModal4Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productModal4Label">KLX 150</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                KLX 150 jadi motor trail dengan bobot paling ringan di kelasnya hanya 118 kilogram saja. KLX150 menggendong 
                mesin mesin SOHC 144 cc, 1-silinder, pendingin udara, dan berpengabut karburator. Klaim tenaganya adalah 11,5 
                daya kuda dan torsi puncak 11,3 Nm.
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="productModal5" tabindex="-1" role="dialog" aria-labelledby="productModal5Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productModal5Label">Norton</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Norton Manx atau Manx Norton adalah sepeda motor balap ikonik Inggris yang terkenal karena kesuksesan balapnya pasca perang. 
                Dibuat dari tahun 1947 hingga 1962, mesin satu silinder 500cc berpendingin udara membawanya hingga kecepatan lebih dari 200 km/jam.
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="productModal6" tabindex="-1" role="dialog" aria-labelledby="productModal6Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productModal6Label">MT 15</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Harga Yamaha MT-15 2024 di Indonesia dimulai dari Rp 38,82 Juta. Tersedia dalam 2 pilihan warna dan 1 varian di Indonesia. 
                MT-15 digerakkan oleh mesin 155 cc dengan transmisi 6-Kecepatan.
            </div>
        </div>
    </div>
</div>

@endsection