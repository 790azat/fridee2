@extends('users.creator.main')

@section('info')
    <div class="col-3 border-end">
        <div class="col-12 d-flex align-items-center px-3">
            <div class="col-auto">
                <div class="p-3">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>
            <div class="col-auto ms-auto">
                <form action="">
                    <input type="search" class="form-control border-0" placeholder="Search">
                </form>
            </div>
        </div>
        <div class="col-12 p-3 py-2 d-flex gap-3">
            <div class="col-auto">
                <div style="width: 50px;height: 50px">
                    <img src="{{ asset('images/azat.jpg') }}" class="rounded-circle" style="width: 100%;height: 100%;object-fit:cover" alt="">
                </div>
            </div>
            <div class="col">
                <div>
                    <p class="fw-bold">{{ 'Azat' }}</p>
                </div>
                <div>
                    <p class="text-secondary">Hi merry</p>
                </div>
            </div>
            <div class="col-auto">
                <p style="font-size: 14px" class="text-secondary"><i class="fa-solid fa-check me-1"></i> 22:40</p>
            </div>
        </div>
        <div class="col-12 p-3 py-2 d-flex gap-3">
            <div class="col-auto">
                <div style="width: 50px;height: 50px">
                    <img src="{{ asset('images/mery.jpg') }}" class="rounded-circle" style="width: 100%;height: 100%;object-fit:cover" alt="">
                </div>
            </div>
            <div class="col">
                <div>
                    <p class="fw-bold">{{ 'Mery' }}</p>
                </div>
                <div>
                    <p class="text-secondary">Hi Azat</p>
                </div>
            </div>
            <div class="col-auto">
                <p style="font-size: 14px" class="text-secondary"><i class="fa-solid fa-check me-1"></i> 18:36</p>
            </div>
        </div>
    </div>
    <div class="col border-bottom p-3 pe-4 d-flex align-items-center">
        <div>
            <div class="mb-1">
                <p class="fw-bold" style="line-height: 16px">Azat Sirekanyan</p>
            </div>
            <div>
                <p class="text-secondary" style="line-height: 16px">Был(а) 1 минуту назад</p>
            </div>
        </div>
        <div class="col-auto ms-auto text-secondary d-flex gap-4" style="font-size: 16px">
            <div>
                <i class="fa-solid fa-search"></i>
            </div>
            <div>
                <i class="fa-solid fa-phone"></i>
            </div>
            <div>
                <i class="fa-solid fa-ellipsis-vertical"></i>
            </div>
        </div>
    </div>
@endsection

