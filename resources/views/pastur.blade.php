@extends('layout.app')

@section('content')
<div class="w-full flex justify-center pt-10 pb-4">
    <div class="bg-[#009CAD] rounded-md py-3 px-3 text-center w-[full] h[10em]">
      <div class="text-white text-3xl font-bold">Pastor Yang Sedang Berkarya</h3>
      </div>  
    </div>
  </div>

<div id="carouselExampleIndicators" class="carousel slide relative" data-bs-ride="carousel">
  <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
    <button
      type="button"
      data-bs-target="#carouselExampleIndicators"
      data-bs-slide-to="0"
      class="active"
      aria-current="true"
      aria-label="Slide 1"
    ></button>
    <button
      type="button"
      data-bs-target="#carouselExampleIndicators"
      data-bs-slide-to="1"
      aria-label="Slide 2"
    ></button>
    <button
      type="button"
      data-bs-target="#carouselExampleIndicators"
      data-bs-slide-to="2"
      aria-label="Slide 3"
    ></button>
  </div>
  <div class="carousel-inner relative w-full overflow-hidden">
    <div class="carousel-item active float-left w-full">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center mt-8 overflow-hidden">
                <div class="w-[20em]">   
                    <div class="p-2 rounded-md bg-[#009CAD]">
                      <img src="{{url('/asset/pastur.png')}}" class="w-full mx-auto rounded-lg shadow-lg justify-centers" alt=""/>
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-2xl rounded-md mx-auto sm:px-6 lg:px-8 bg-[#009CAD]">
          <div class="text-center mx-auto mt-10">
            <h3 class="text-3xl font-bold text-white pt-3">Romo Yahu</h3>
              <p class="mb-6 pb-2 md:mb-12 text-slate-100 pb-5">
                1Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio assumenda amet adipisci fugiat beatae quasi dolorum, suscipit magnam dignissimos vitae, consectetur alias consequuntur cum, minus id nostrum impedit perferendis? Consectetur ullam aliquid quis dolorum corrupti quos aperiam quam ducimus, esse quas quasi fugit exercitationem dolores quidem doloribus nobis voluptatem vel!
            </p>
          </div>
        </div>
    </div>
    <div class="carousel-item float-left w-full">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center mt-8 overflow-hidden">
                <div class="w-[20em]">   
                    <div class="p-2 rounded-md bg-[#009CAD]">
                      <img src="{{url('/asset/pastur.png')}}" class="w-full mx-auto rounded-lg shadow-lg justify-centers" alt=""/>
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-2xl rounded-md mx-auto sm:px-6 lg:px-8 bg-[#009CAD]">
          <div class="text-center mx-auto mt-10">
            <h3 class="text-3xl font-bold text-white pt-3">Romo Yahi</h3>
              <p class="mb-6 pb-2 md:mb-12 text-slate-100 pb-5">
                2Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio assumenda amet adipisci fugiat beatae quasi dolorum, suscipit magnam dignissimos vitae, consectetur alias consequuntur cum, minus id nostrum impedit perferendis? Consectetur ullam aliquid quis dolorum corrupti quos aperiam quam ducimus, esse quas quasi fugit exercitationem dolores quidem doloribus nobis voluptatem vel!
              </p>
          </div>
        </div>
    </div>
    <div class="carousel-item float-left w-full">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center mt-8 overflow-hidden">
                <div class="w-[20em]">   
                    <div class="p-2 rounded-md bg-[#009CAD]">
                      <img src="{{url('/asset/pastur.png')}}" class="w-full mx-auto rounded-lg shadow-lg justify-centers" alt=""/>
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-2xl rounded-md mx-auto sm:px-6 lg:px-8 bg-[#009CAD]">
          <div class="text-center mx-auto mt-10">
            <h3 class="text-3xl font-bold text-white pt-3">Romo Yaho</h3>
              <p class="mb-6 pb-2 md:mb-12 text-slate-100 pb-5">
                3Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio assumenda amet adipisci fugiat beatae quasi dolorum, suscipit magnam dignissimos vitae, consectetur alias consequuntur cum, minus id nostrum impedit perferendis? Consectetur ullam aliquid quis dolorum corrupti quos aperiam quam ducimus, esse quas quasi fugit exercitationem dolores quidem doloribus nobis voluptatem vel!
              </p>
         </div>
        </div>
    </div>
  </div>
  <button
    class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
    type="button"
    data-bs-target="#carouselExampleIndicators"
    data-bs-slide="prev"
  >
    <span class="bg-black carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button
    class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
    type="button"
    data-bs-target="#carouselExampleIndicators"
    data-bs-slide="next"
  >
    <span class="bg-black carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  </div>
  <div class="w-full flex justify-center pb-4">
    <div class="bg-[#009CAD] rounded-md py-3 px-3 text-center w-[full] h[10em]">
      <div class="text-white text-3xl font-bold">Pastor Yang Pernah Berkarya</h3>
      </div>  
    </div>
  </div>



<div class="flex">
  <div class="ml-[2em]">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center mt-8 overflow-hidden">
            <div class="w-[20em]">   
                <div class="p-2 rounded-md bg-[#009CAD]">
                  <img src="{{url('/asset/pastur.png')}}" class="w-full mx-auto rounded-lg shadow-lg justify-centers" alt=""/>
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-2xl rounded-md mx-auto sm:px-6 lg:px-8 bg-[#009CAD]">
      <div class="text-center mx-auto mt-10">
        <h3 class="text-3xl font-bold text-white pt-3">Romo Yuu</h3>
          <p class="mb-6 pb-2 md:mb-12 text-slate-100 pb-5">
            1Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio assumenda amet adipisci fugiat beatae quasi dolorum, suscipit magnam dignissimos vitae, consectetur alias consequuntur cum, minus id nostrum impedit perferendis? Consectetur ullam aliquid quis dolorum corrupti quos aperiam quam ducimus, esse quas quasi fugit exercitationem dolores quidem doloribus nobis voluptatem vel!
        </p>
      </div>
    </div>
  </div>
  <div class="mx-[2em]">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center mt-8 overflow-hidden">
            <div class="w-[20em]">   
                <div class="p-2 rounded-md bg-[#009CAD]">
                  <img src="{{url('/asset/pastur.png')}}" class="w-full mx-auto rounded-lg shadow-lg justify-centers" alt=""/>
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-2xl rounded-md mx-auto sm:px-6 lg:px-8 bg-[#009CAD]">
      <div class="text-center mx-auto mt-10">
        <h3 class="text-3xl font-bold text-white pt-3">Romo Yee</h3>
          <p class="mb-6 pb-2 md:mb-12 text-slate-100 pb-5">
            1Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio assumenda amet adipisci fugiat beatae quasi dolorum, suscipit magnam dignissimos vitae, consectetur alias consequuntur cum, minus id nostrum impedit perferendis? Consectetur ullam aliquid quis dolorum corrupti quos aperiam quam ducimus, esse quas quasi fugit exercitationem dolores quidem doloribus nobis voluptatem vel!
        </p>
      </div>
    </div>
  </div>
  <div class="mr-[2em]">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center mt-8 overflow-hidden">
            <div class="w-[20em]">   
                <div class="p-2 rounded-md bg-[#009CAD]">
                  <img src="{{url('/asset/pastur.png')}}" class="w-full mx-auto rounded-lg shadow-lg justify-centers" alt=""/>
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-2xl rounded-md mx-auto sm:px-6 lg:px-8 bg-[#009CAD]">
      <div class="text-center mx-auto mt-10">
        <h3 class="text-3xl font-bold text-white pt-3">Romo Yaa</h3>
          <p class="mb-6 pb-2 md:mb-12 text-slate-100 pb-5">
            1Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio assumenda amet adipisci fugiat beatae quasi dolorum, suscipit magnam dignissimos vitae, consectetur alias consequuntur cum, minus id nostrum impedit perferendis? Consectetur ullam aliquid quis dolorum corrupti quos aperiam quam ducimus, esse quas quasi fugit exercitationem dolores quidem doloribus nobis voluptatem vel!
        </p>
      </div>
    </div>
  </div>
</div>


@stop
</body>
</html>