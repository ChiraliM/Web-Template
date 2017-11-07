@extends( 'layouts.web' )

@section( 'content' )

    <div class="container">
        <div class="columns is-multiline is-mobile">

            @foreach( $items as $item )

                <div class="column is-half-mobile is-one-third-tablet is-one-quarter-desktop item-list">

                    <a :href=" {{ route('web.item', $item->slug) }}" class="card">
                            <span class="card-image">
                                <img :src="" alt="" class="img">
                            </span>
                            <p class="item-header">{{ $item->name }}</p>
                        <div class="item-description">
                            {{ $item->description }}
                        </div>
                    </a>

                </div>
            @endforeach
        </div>
    </div>
@endsection