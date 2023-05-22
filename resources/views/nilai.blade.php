@php
    $nama = "budi";
    $nilai = 60;
@endphp

{{-- --jika nilai lebih dari sama degan 60 maka siswa lulus
    jika nilai kurang dari sama dengan 60 maka siswa tidak lulus --}}

    @if ($nilai>=60)
         @php
            $ket = "lulus";
        @endphp
    @else
        @php
            $ket = "tidak lulus";
         @endphp
    @endif

    siswa yang bernama {{ $nama }}
    <br>Dengan nilai {{ $nilai }}
    <br> dinyatakan {{ $ket }}
