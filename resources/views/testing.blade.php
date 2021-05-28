@extends('Layouts/app')
@section('content')

    <div class="container mx-auto px-4">
        <figure class="md:flex bg-gray-100 rounded-xl p-8 md:p-0">
            <img class="w-32 h-32 md:w-48 md:h-auto md:rounded-none rounded-full mx-auto" src="https://picsum.photos/id/237/200/300" alt="" width="384" height="512">
            <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
                <blockquote>
                    <p class="text-lg font-semibold">
                        “Tailwind CSS is the only framework that I've seen scale
                        on large teams. It’s easy to customize, adapts to any design,
                        and the build size is tiny.”
                    </p>
                </blockquote>
                <figcaption class="font-medium">
                    <div class="text-cyan-600">
                        Sarah Dayan
                    </div>
                    <div class="text-gray-500">
                        Staff Engineer, Algolia
                    </div>
                </figcaption>
            </div>
        </figure>

    </div>
<div class="h-64 grid gird-rows-2 grid-flow-col gap-4">
    <div>
        <img src="https://picsum.photos/id/237/200/300" alt="test">
    </div>
    <div>
        2
    </div>
    <div>3</div>
</div>

    <div class="row">
        <div class="container">

            <div class="col-md-7">
                <div class="row">
                    <h2>Title</h2>
                    <h4>SubTitle</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores officia provident sit suscipit voluptate? Amet, assumenda cumque dolorum, excepturi harum id inventore itaque maxime perspiciatis repudiandae sunt suscipit voluptatibus voluptatum?</p>
                </div>
                <div class="row">
                    <h3>Objectives</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores officia provident sit suscipit voluptate? Amet, assumenda cumque dolorum, excepturi harum id inventore itaque maxime perspiciatis repudiandae sunt suscipit voluptatibus voluptatum?</p>
                </div>
                <div class="row">
                    <h3>Web</h3>
                    <p>www.carvaz.com</p>
                </div>

                <div class="row">
                    <a href="#" class="btn btn-primary">Download Resume</a>
                </div>
                <div class="row">
                    <h6>Social media</h6>
                    i
                    i
                    i

                </div>
            </div>

        </div>
    </div>
@endsection
