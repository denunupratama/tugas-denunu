@extends('layouts.mainlayout')

@section('title',Students)

@section ('content')
halo ini halaman data siswa
<table>
    <tr>
        <td>no</td>
        <td>nama siswa</td>
        <td>gender</td>
        <td>nis</td>
        <td>kelas</td>
    </tr>
    @foreach ($siswa as $data)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$data->nama_siswa}}</td>
        <td>{{$data->gender}}</td>
        <td>{{$data->nis}}</td>
        <td>{{$data->class_id}}</td>
    </tr>
</table>