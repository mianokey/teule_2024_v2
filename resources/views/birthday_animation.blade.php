<div class="d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="card my-5" id="birthday-card" style="width: auto;">
        <div class="card-header text-center">
            <h6 class="m-2">Join us in Celebrating the Birthdays of Our Precious Little Ones Today</h6>
        </div>
        <div class="card-body">
            <button id="close-animation" class="position-absolute top-0 end-0">&times;</button> <!-- Close icon inside card -->
            <div class="row justify-content-center" id="child-cards-container">
                @php
                    $totalChildren = count($children);
                    $colSize = $totalChildren > 3 ? 'col-md-4' : 'col-md-' . (12 / $totalChildren);
                @endphp
                @foreach($children as $child)
                    <div class="{{ $colSize }} mb-3 d-flex justify-content-center">
                        <div class="child-card text-center p-3 border rounded">
                            <img src="{{ $child->img_url }}" alt="{{ $child->name }}" class="img-fluid rounded-circle mb-2">
                            <h6>{{ $child->name }}</h6>
                            <a href="{{route('donate')}}" id="open-in-new-tab-link">
                            <button class="btn-sm donate-button" style="text-transform: uppercase;">Gift {{ explode(' ', $child->name)[0] }}</button>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <button id="dont-show-again" class="btn-sm" style="background:var(--main-color--green)"> 
            <div class="card-footer text-center">
                Don't show again today
            </div>
        </button>
    </div>
</div>

<canvas id="birthday" class="position-absolute top-0 start-0"></canvas>



