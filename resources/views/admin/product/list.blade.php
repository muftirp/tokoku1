@extends('admin.index')
tidak tampil
@section('body')

<div class="card">
    <div class="card-body">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Gambar Produk</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Harga</th>
            <th scope="col">Stok</th>
            <th scope="col">AKSI</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>sendal</td>
            <td>sendal.png</td>
            <td>sendal</td>
            <td>10000</td>
            <td>3</td>
            <td><a  href="{{url('product/{show}')}}" class="btn btn-secondary" >Edit</a>  <a href="#" class="btn btn-danger">Delete</a></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>sepatu</td>
            <td>sepatu.png</td>
            <td>sepatu</td>
            <td>20000</td>
            <td>2</td>
            <td><a href="{{url('product/{show}')}}" class="btn btn-secondary">Edit</a>  <a href="#" class="btn btn-danger">Delete</a></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>buku</td>
            <td>buku.png</td>
            <td>buku</td>
            <td>30000</td>
            <td>1</td>
            <td><a href="{{url('product/{show}')}}" class="btn btn-secondary">Edit</a>  <a href="#" class="btn btn-danger">Delete</a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection