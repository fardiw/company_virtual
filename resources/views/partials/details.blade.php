
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form method="POST" action="{{route('skill.store',$user)}}">
            @csrf()
            <div class="modal-content">
                @if ($user)
                    <span>{{ $user->id }}</span>
                @else
                    <span>user is false</span>
                @endif
                <div class="modal-header border-0">
                    <h1 class="modal-title fs-5 font-bold text-white" id="exampleModalLabel">افزودن مهارت</h1>
                    <svg data-bs-dismiss="modal" aria-label="Close" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         fill="currentColor" class="bi bi-x-square-fill cursor text-danger me-auto ms-0" viewBox="0 0 16 16">
                        <path
                            d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708" />
                    </svg>
                </div>
                <div class="modal-body border-0">
                    <input name="title" id="skillText" placeholder="افزودن مهارت" class="form-control text-dark border-warning bg-transparent text-white">
                </div>
                <input name="level" value="5" type="hidden">
                <input name="user_id" value="{{$user->id}}" type="hidden">
                <div class="modal-footer border-0">
                    <input data-bs-dismiss="model" type="submit" id="addSkill" value="افزودن" class="btn btn-warning w-100 font-bold text-white">
                    {{-- <button data-bs-dismiss="modal" id="addSkill" type="submit" class="btn btn-warning w-100 font-bold text-white">افزودن</button> --}}
                </div>
            </div>
        </form>
    </div>
</div>
<div class="mt-5 max-w-460 mx-auto border-dashed-2-warning rounded-3 p-sm-4 p-3 shadow bg-primary">
    <form method="POST" action="{{route('user.update',$user)}}">
        @csrf
        @method('PUT')
        <div class="text-center mb-5">
            <img src="/assets/img/woman-user-circle-black-icon.png" class="rounded-circle w-150 h-150 mx-auto">
            <a class="font-bold text-white d-block mt-4">تغییر عکس پروفایل</a>
        </div>
        <div class="row g-4 mb-4">
            <div class="col-sm-6">
                <input name="first_name" type="text" class="form-control bg-transparent border border-warning text-white" placeholder="نام" aria-label="نام" value="{{ $user->first_name}}">
            </div>
            <div class="col-sm-6">
                <input name="last_name" type="text" class="form-control bg-transparent border border-warning text-white" placeholder="نام خانوادگی" aria-label="نام خانوادگی" value="{{ $user->last_name}}">
            </div>
        </div>
        <div class="row g-4 mb-4">
            <div class="col-sm-6">
                <input name="phone" type="text" class="form-control bg-transparent border border-warning text-white" placeholder="شماره تلفن همراه" aria-label="شماره تلفن همراه" value="{{ $user->phone}}">
            </div>
            <div class="col-sm-6">
                <input name="telegram_id" type="text" class="form-control bg-transparent border border-warning text-white" placeholder="آیدی تلگرام" aria-label="آیدی تلگرام" value="{{ $user->telegram_id}}">
            </div>
        </div>
        <div class="d-flex align-items-center gap-5">
            <textarea name="description" class="form-control bg-transparent border border-warning text-white" placeholder="وضیحات" aria-label="توضیحات" value="{{ $user->desciption }}"></textarea>
        </div>
        <div class="d-flex align-items-center gap-10">
            <input type="submit" class="btn btn-success font-bold flex-shrink-0 mb-5" value="ثبت تغییرات" />
        </div>
    </form>
    <div>
        <div class="d-flex align-items-center gap-5">
            <h5 class="font-bold text-warning mb-0">مهارت ها</h5>
            <a data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-success font-bold flex-shrink-0">افزودن مهارت</a>
        </div>
        <div class="font-bold text-white mt-4" id="skills">
            @foreach ($user->skills as $skill)
                <div class="mb-10">
                    <span>{{$skill->title}}</span>
                    <form method="POST" action="{{route('skill.destroy',$skill)}}" style="display: inline-block;">
                        @csrf()
                        @method('DELETE')
                        <input type="submit" class="btn btn-success font-bold flex-shrink-0 mx-26" value="حذف" >
                    </form>
                </div>
            @endforeach

        </div>
    </div>
</div>
