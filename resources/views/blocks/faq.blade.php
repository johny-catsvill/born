@foreach($composerFaq as $faq)
    <div class="accordion-item" itemscope itemprop="mainEntity"
         itemtype="https://schema.org/Question">
        <button id="accordion-button-{{ $faq->id }}" aria-expanded="false">
            <span class="accordion-title" itemprop="name">{{ $faq->question }}</span>
            <span class="icon" aria-hidden="true"></span></button>
        <div class="accordion-content" itemscope
             itemprop="acceptedAnswer"
             itemtype="https://schema.org/Answer">
            <p itemprop="text">
                {!! $faq->answer !!}
            </p>
        </div>
    </div>
@endforeach
