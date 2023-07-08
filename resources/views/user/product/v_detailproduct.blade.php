@extends('layout_user.v_index')
@section('content')


<main id="head-product">
    <div class="container py-4">

        <div class="p-5 mb-4 rounded-3" id="header-p">
            <div class="container-fluid py-5">
                <h3 class="fw-bold">Produk Berkualitas, Harga Terjangkau, Pilihan Tepat!</h3>
                <p class="col-md-8 fs-6">Temukan produk berkualitas dengan harga terjangkau hanya di sini! Kami
                    menyediakan pilihan terbaik untuk kebutuhan Anda. Dapatkan produk dengan standar kualitas tinggi
                    tanpa merusak anggaran Anda. Kunjungi situs kami sekarang dan nikmati pengalaman berbelanja yang tak
                    terlupakan!</p>
            </div>
        </div>

        <div class="row align-items-md-stretch">
            <div class="col-md-4">
                <div class="image-box">
                    <img src="{{ asset('storage/image_admin/product/'.$product->image) }}" alt="">
                </div>
            </div>
            <div class="col-md-8">
                <div class="h-100 p-5 bg-body-tertiary border rounded-3">
                    <h2>{{ $product->title }}</h2>
                    <p>Or, keep it light and add a border for some added definition to the boundaries of your content.
                        Be sure to look under the hood at the source HTML here as we've adjusted the alignment and
                        sizing of both column's content for equal-height.</p>
                    <span class="display-7 fw-bold">Detail Product</span>
                    <table>
                      <tbody>
                        <tr>
                          <td style="width: 120px">Type</td>
                          <td style="padding-right: 15px">:</td>
                          <td style="width: 150px">{{ $product->type }}</td>
                        </tr>
                        <tr>
                          <td style="width: 120px">Width</td>
                          <td style="padding-right: 15px">:</td>
                          <td style="width: 150px">{{ $product->width }}</td>
                        </tr>
                        <tr>
                          <td style="width: 120px">Height</td>
                          <td style="padding-right: 15px">:</td>
                          <td style="width: 150px">{{ $product->height }}</td>
                        </tr>
                        <tr>
                          <td style="width: 120px">Colour</td>
                          <td style="padding-right: 15px">:</td>
                          <td style="width: 150px">{{ $product->colour }}</td>
                        </tr>
                      </tbody>
                    </table>
                    <table style="margin-top: 20px">
                      <tbody>
                        <tr>
                          <td style="padding-right: 20px">
                            <a href="/product" class="btn btn-outline-danger">Back</a>
                          </td>
                          <td>
                            <a href="https://wa.me/6281230533154?text=Hallo,%20apakah%20product%20{{ $product->title }}%20ada..?" class="btn btn-outline-success" target="_blank">
                              <i class="bx bxl-whatsapp"></i>Pesan
                            </a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

            </div>
        </div>

    </div>
</main>




@endsection
