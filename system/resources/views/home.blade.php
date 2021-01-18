@extends('TemplateClient.utils.base')

@section('content')
<br>
<!--conteten produk-->
<div class="card-body">
            <table class="table">
              <thead>
                
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="card-body bg-dark">
                      <form action="{{url('home/filter')}}" method="post">
                        @csrf
                        <div class="form-group">
                          <label for="" class="control-label">Nama</label>
                          <input type="text" class="form-control" name="nama" value="{{$nama ?? ''}}">
                        </div>
                       <!--  <div class="form-group">
                          <label for="" class="control-label">Stok</label>
                          <input type="text" class="form-control" name="stok" value="{{$stok ?? ''}}">
                        </div>
                        <div class="col">
                          <div class="form-group">
                            <label for="" class="control-label">Harga Min</label>
                            <input type="text" class="form-control" name="harga_min" value="{{$harga_min ?? ''}}">
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-group">
                            <label for="" class="control-label">Harga Max</label>
                            <input type="text" class="form-control" name="harga_max" value="{{$harga_max ?? ''}}">
                          </div>
                        </div> -->
                        <button class="btn btn-dark float-right">
                          <i class="fa fa-search">Filter</i>
                        </button>
                      </form>
                    </div>
                  </td>
                  <td style="width: 1000px">
                     <div class="row">
                            @foreach($list_produk as $data)
                        <div class=" col-lg-3 ftco-animate ">
                          <div class="">
                              <div class="overlay"></div>
                            </a>
                            <div class="card text py-4 pb-4 px-4 text-center">
                              <img src="{{url("system/public/$data->foto")}}" alt="" height ="300px">
                              <h3>{{$data->nama}}</h3>
                              <div class="d-flex">
                                <div class="pricing">
                                  <p class="price">
                                    <span class="price-sale">Rp. {{$data->harga}}</span>
                                    | Stok : {{$data->stok}} <br>
                                    Berat : {{$data->berat}} | 
                                    </p>
                                </div>
                              </div>
                              <p class="buttons ml-2"><a href="test-ajax" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>JANGAN DI SKIP</a>
                              </p>
       
                              <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                  <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                    <span><i class="ion-ios-menu"></i></span>
                                  </a>
                                  <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                    <span><i class="ion-ios-cart"></i></span>
                                  </a>
                                  <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                    <span><i class="ion-ios-heart"></i></span>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                            @endforeach
                          <!-- <div class="row">
                            <div class="col-md-12">
                              <div class="d-flex justify-content-center">
                                {!!$list_produk->links() !!}
                              </div>
                            </div>
                          </div> -->
                        </div>
                      </div>
                  </td>
                </tr>
              </tbody>              
            </table>
          </div>
            
@endsection