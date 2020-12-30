@props(['course'])


<article class="card flex flex-col">
    <img class="h-36 w-full object-cover" src="{{Storage::url($course->image->url)}}" alt="">

    <div class="card-body flex-1 flex flex-col">
        <h1 class="card-title">{{Str::limit($course->title, 40)}}</h1>
        <p class="text-gray-500 text-sm mb-2 mt-auto">Prof: {{$course->teacher->name}}</p>

        <div class="flex">

            <ul class="flex text-sm">
                <li class="mr-1">
                    <i class="fas fa-star text-{{$course->rating >= 1 ? 'yellow' : 'gray'}}-400"></i>
                </li>
                <li class="mr-1">
                    <i class="fas fa-star text-{{$course->rating >= 2 ? 'yellow' : 'gray'}}-400"></i>
                </li>
                <li class="mr-1">
                    <i class="fas fa-star text-{{$course->rating >= 3 ? 'yellow' : 'gray'}}-400"></i>
                </li>
                <li class="mr-1">
                    <i class="fas fa-star text-{{$course->rating >= 4 ? 'yellow' : 'gray'}}-400"></i>
                </li>
                <li class="mr-1">
                    <i class="fas fa-star text-{{$course->rating == 5 ? 'yellow' : 'gray'}}-400"></i>
                </li>
            </ul>

            <p class="text-sm text-gray-500 ml-auto">
                <i class="fas fa-users"></i>
                ({{$course->students_count}})
            </p>

        </div>
        
        <p class="my-2 font-bold text-gray-600">
            @if ($course->price->value)
                {{$course->price->value}} US$
            @else
                <span class="text-green-400">GRATIS</span>
            @endif
        </p>
        <a href="{{route('courses.show', $course)}}" class="mt-2 btn btn-primary btn-block">
            Más información
        </a >
    </div>
</article>