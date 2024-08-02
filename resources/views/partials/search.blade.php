@if(\Illuminate\Support\Facades\Auth::check())
    <form  class="max-w-460 mx-auto mt-5">
        <div class="input-group flex-nowrap" dir="ltr">
            <input name="name" type="search" class="form-control border-warning text-end bg-transparent text-white" placeholder="جستجو" aria-label="Username" aria-describedby="addon-wrapping">
            <span class="input-group-text border-warning bg-transparent" id="addon-wrapping">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search text-warning" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
              </svg>
            </span>
        </div>
    </form>
    <div class="mt-5">
        <div class="mb-5">
            <h6 class="font-bold text-warning">لیست برترین شرکت ها:</h6>
            <div class="mt-4 row g-4">
                <div class="col-lg-6">
                    <div class="bg-primary border-dashed-2-warning text-white flex-wrap rounded-3 p-3 d-flex justify-content-between align-items-end gap-3">
                        <div class="flex-grow-1">
                            <div class="d-flex align-items-center gap-3">
                                <div class="w-70 h-70 position-relative">
                                    <span class="bg-danger text-white font-bold position-absolute font-bold start-0 rounded-circle d-flex align-items-center justify-content-center fs-14 w-24 h-24">15</span>
                                    <img alt="img" src="/assets/img/woman-user-circle-black-icon.png" class="w-70 h-70 d-block rounded-circle">
                                </div>
                                <p class="font-bold mb-0 text-warning">شرکت آینده نگران اصفهان</p>
                            </div>
                            <p class="mb-0 mt-3">
                                این شرکت از سال 98 با بهره گیری از بهترین افراد با تخصص های عالی توانسته است به مدارج بالایی در کشور برسد.
                            </p>
                        </div>
                        <a class="btn btn-warning flex-shrink-0">درخواست عضویت</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-primary border-dashed-2-warning text-white flex-wrap rounded-3 p-3 d-flex justify-content-between align-items-end gap-3">
                        <div class="flex-grow-1">
                            <div class="d-flex align-items-center gap-3">
                                <div class="w-70 h-70 position-relative">
                                    <span class="bg-danger text-white font-bold position-absolute font-bold start-0 rounded-circle d-flex align-items-center justify-content-center fs-14 w-24 h-24">15</span>
                                    <img alt="img" src="/assets/img/woman-user-circle-black-icon.png" class="w-70 h-70 d-block rounded-circle">
                                </div>
                                <p class="font-bold mb-0 text-warning">شرکت آینده نگران اصفهان</p>
                            </div>
                            <p class="mb-0 mt-3">
                                این شرکت از سال 98 با بهره گیری از بهترین افراد با تخصص های عالی توانسته است به مدارج بالایی در کشور برسد.
                            </p>
                        </div>
                        <a class="btn btn-warning flex-shrink-0">درخواست عضویت</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-primary border-dashed-2-warning text-white flex-wrap rounded-3 p-3 d-flex justify-content-between align-items-end gap-3">
                        <div class="flex-grow-1">
                            <div class="d-flex align-items-center gap-3">
                                <div class="w-70 h-70 position-relative">
                                    <span class="bg-danger text-white font-bold position-absolute font-bold start-0 rounded-circle d-flex align-items-center justify-content-center fs-14 w-24 h-24">15</span>
                                    <img alt="img" src="/assets/img/woman-user-circle-black-icon.png" class="w-70 h-70 d-block rounded-circle">
                                </div>
                                <p class="font-bold mb-0 text-warning">شرکت آینده نگران اصفهان</p>
                            </div>
                            <p class="mb-0 mt-3">
                                این شرکت از سال 98 با بهره گیری از بهترین افراد با تخصص های عالی توانسته است به مدارج بالایی در کشور برسد.
                            </p>
                        </div>
                        <a class="btn btn-warning flex-shrink-0">درخواست عضویت</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-primary border-dashed-2-warning text-white flex-wrap rounded-3 p-3 d-flex justify-content-between align-items-end gap-3">
                        <div class="flex-grow-1">
                            <div class="d-flex align-items-center gap-3">
                                <div class="w-70 h-70 position-relative">
                                    <span class="bg-danger text-white font-bold position-absolute font-bold start-0 rounded-circle d-flex align-items-center justify-content-center fs-14 w-24 h-24">15</span>
                                    <img alt="img" src="/assets/img/woman-user-circle-black-icon.png" class="w-70 h-70 d-block rounded-circle">
                                </div>
                                <p class="font-bold mb-0 text-warning">شرکت آینده نگران اصفهان</p>
                            </div>
                            <p class="mb-0 mt-3">
                                این شرکت از سال 98 با بهره گیری از بهترین افراد با تخصص های عالی توانسته است به مدارج بالایی در کشور برسد.
                            </p>
                        </div>
                        <a class="btn btn-warning flex-shrink-0">درخواست عضویت</a>
                    </div>
                </div>
            </div>
        </div>
        @if ($users != null)
            <div>
                <h6 class="font-bold text-warning">لیست اعضا یافت شده:</h6>
                <div class="col-lg-6">
                    <div class="bg-primary border-dashed-2-warning text-white flex-wrap rounded-3 p-3 d-flex justify-content-between align-items-end gap-3">

                        @foreach ($users as $user)

                            <div class="flex-grow-1">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="w-70 h-70 position-relative">
                                        <span class="bg-danger text-white font-bold position-absolute font-bold start-0 rounded-circle d-flex align-items-center justify-content-center fs-14 w-24 h-24">{{ $user->level }}</span>
                                        <img alt="img" src="/assets/img/woman-user-circle-black-icon.png" class="w-70 h-70 d-block rounded-circle">
                                    </div>
                                    <p class="font-bold mb-0 text-warning">{{ $user->first_name . $user->last_name }}</p>
                                </div>
                                <p class="mb-0 mt-3">
                                    {{
                                      $user->description ?? 'توضیحاتی برای این کاربر موجود نیست'
                                    }}
                                </p>
                                <p class="font-bold mb-0 text-warning">مهارت ها </p>
                                @foreach ($user->skills as $skill)
                                    <p class="font-bold mb-0 text-warning"> {{ $skill->title }} </p>
                                @endforeach
                            </div>
                            <a class="btn btn-warning flex-shrink-0">درخواست همکاری</a>
                        @endforeach

                    </div>
                </div>
            </div>
        @else
            <div>
                <h6 class="font-bold text-warning">لیست برترین اعضا:</h6>
                <div class="mt-4 row g-4">
                    <div class="col-lg-6">
                        <div class="bg-primary border-dashed-2-warning text-white flex-wrap rounded-3 p-3 d-flex justify-content-between align-items-end gap-3">
                            <div class="flex-grow-1">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="w-70 h-70 position-relative">
                                        <span class="bg-danger text-white font-bold position-absolute font-bold start-0 rounded-circle d-flex align-items-center justify-content-center fs-14 w-24 h-24">15</span>
                                        <img alt="img" src="/assets/img/woman-user-circle-black-icon.png" class="w-70 h-70 d-block rounded-circle">
                                    </div>
                                    <p class="font-bold mb-0 text-warning">محمد رضایی</p>
                                </div>
                                <p class="mb-0 mt-3">
                                    این شخص از سال 98 با بهره گیری از بهترین افراد با تخصص های عالی توانسته است به مدارج بالایی در کشور برسد.
                                </p>
                            </div>
                            <a class="btn btn-warning flex-shrink-0">درخواست همکاری</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="bg-primary border-dashed-2-warning text-white flex-wrap rounded-3 p-3 d-flex justify-content-between align-items-end gap-3">
                            <div class="flex-grow-1">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="w-70 h-70 position-relative">
                                        <span class="bg-danger text-white font-bold position-absolute font-bold start-0 rounded-circle d-flex align-items-center justify-content-center fs-14 w-24 h-24">15</span>
                                        <img alt="img" src="/assets/img/woman-user-circle-black-icon.png" class="w-70 h-70 d-block rounded-circle">
                                    </div>
                                    <p class="font-bold mb-0 text-warning">محمد رضایی</p>
                                </div>
                                <p class="mb-0 mt-3">
                                    این شخص از سال 98 با بهره گیری از بهترین افراد با تخصص های عالی توانسته است به مدارج بالایی در کشور برسد.
                                </p>
                            </div>
                            <a class="btn btn-warning flex-shrink-0">درخواست همکاری</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="bg-primary border-dashed-2-warning text-white flex-wrap rounded-3 p-3 d-flex justify-content-between align-items-end gap-3">
                            <div class="flex-grow-1">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="w-70 h-70 position-relative">
                                        <span class="bg-danger text-white font-bold position-absolute font-bold start-0 rounded-circle d-flex align-items-center justify-content-center fs-14 w-24 h-24">15</span>
                                        <img alt="img" src="/assets/img/woman-user-circle-black-icon.png" class="w-70 h-70 d-block rounded-circle">
                                    </div>
                                    <p class="font-bold mb-0 text-warning">محمد رضایی</p>
                                </div>
                                <p class="mb-0 mt-3">
                                    این شخص از سال 98 با بهره گیری از بهترین افراد با تخصص های عالی توانسته است به مدارج بالایی در کشور برسد.
                                </p>
                            </div>
                            <a class="btn btn-warning flex-shrink-0">درخواست همکاری</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="bg-primary border-dashed-2-warning text-white flex-wrap rounded-3 p-3 d-flex justify-content-between align-items-end gap-3">
                            <div class="flex-grow-1">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="w-70 h-70 position-relative">
                                        <span class="bg-danger text-white font-bold position-absolute font-bold start-0 rounded-circle d-flex align-items-center justify-content-center fs-14 w-24 h-24">15</span>
                                        <img alt="img" src="/assets/img/woman-user-circle-black-icon.png" class="w-70 h-70 d-block rounded-circle">
                                    </div>
                                    <p class="font-bold mb-0 text-warning">محمد رضایی</p>
                                </div>
                                <p class="mb-0 mt-3">
                                    این شخص از سال 98 با بهره گیری از بهترین افراد با تخصص های عالی توانسته است به مدارج بالایی در کشور برسد.
                                </p>
                            </div>
                            <a class="btn btn-warning flex-shrink-0">درخواست همکاری</a>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
@else
    <div class="text text-danger mt-5">لطفا وارد حساب کاربری خود شوید ! </div>
@endif

