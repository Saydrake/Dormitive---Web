<!DOCTYPE html>
<html lang="en">
<base href="/public">
<head>
    <base href="/public">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section class="artists-section section-padding" id="section_3">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-12 text-center">
                        <h2 class="mb-4">Our Rooms</h1>
                    </div>

                        <div class="col-lg-5 col-12">
                        <div class="artists-thumb">
                            <img src="room_img/{{$room->image}}"
                                class="artists-image img-fluid">

                            <div class="artists-hover">
                                <p>
                                    {{ $room->room_title }}
                                </p>

                                <p>
                                    {{ $room->description }}
                                </p>

                                <p>
                                    {{ $room->price }}
                                </p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
</body>
</html>