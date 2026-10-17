@extends('layouts.app')

@section('title', 'Donate — Great Africa')
@section('meta_description', 'Support Great Africa: fund climate-smart agriculture, conservation, and youth & women empowerment across Kenya. M-Pesa, bank, and card giving.')

@section('content')

<!-- PAGE HERO -->
<section class="page-hero on-dark">
    <div class="container">
        <p class="eyebrow"><span class="num">GREAT</span> Africa — Est. Kenya</p>
        <h1 class="h1">Give where it takes root.</h1>
        <p class="lead">
            Your donation funds training, tools, seedlings, and restoration
            in communities building climate resilience across Kenya.
        </p>
        <p class="page-crumbs"><a href="/">Home</a> · Donate</p>
    </div>
</section>

<!-- TIERS -->
<section class="section">
    <div class="container">

        <div class="section-head reveal">
            <div class="section-head-copy">
                <p class="eyebrow"><span class="num">01</span> What your gift does</p>
                <h2 class="h2">Suggested giving amounts.</h2>
                <p class="lead">Give any amount — these tiers show what different levels unlock in the field.</p>
            </div>
        </div>

        <div class="tier-list reveal">
            @foreach (config('site.tiers') as $tier)
                <div class="tier">
                    <span class="tier-amount">{{ $tier['amount'] }}</span>
                    <p>{{ $tier['impact'] }}</p>
                    <button
                        class="btn btn-sm"
                        type="button"
                        data-tier-amount="{{ $tier['amount'] }}"
                        style="margin-top:0.75rem; align-self:flex-start;"
                    >Choose this amount</button>
                </div>
            @endforeach
        </div>

    </div>
</section>

<!-- WAYS TO GIVE + PLEDGE -->
<section class="section section-alt">
    <div class="container">

        <div class="split">

            <!-- WAYS TO GIVE -->
            <div class="stack-lg reveal">
                <div>
                    <p class="eyebrow"><span class="num">02</span> Ways to give</p>
                    <h2 class="h2" style="margin:1.1rem 0 1.5rem;">M-Pesa, bank transfer, or card.</h2>
                </div>

                <div class="card" style="border:1px solid var(--line); background:var(--white);">
                    <h3 class="h3">M-Pesa</h3>
                    <dl class="detail-list">
                        <div><dt>Provider</dt><dd>{{ config('site.donations.mpesa.provider') }}</dd></div>
                        <div><dt>Paybill / Till</dt><dd>{{ config('site.donations.mpesa.paybill') }}</dd></div>
                        <div><dt>Account</dt><dd>{{ config('site.donations.mpesa.account') }}</dd></div>
                        <div><dt>Reference</dt><dd>{{ config('site.donations.mpesa.reference') }}</dd></div>
                    </dl>
                </div>

                <div class="card" style="border:1px solid var(--line); background:var(--white);">
                    <h3 class="h3">Bank transfer</h3>
                    <dl class="detail-list">
                        <div><dt>Bank</dt><dd>{{ config('site.donations.bank.name') }}</dd></div>
                        <div><dt>Branch</dt><dd>{{ config('site.donations.bank.branch') }}</dd></div>
                        <div><dt>Account name</dt><dd>{{ config('site.donations.bank.account_name') }}</dd></div>
                        <div><dt>Account no.</dt><dd>{{ config('site.donations.bank.account_number') }}</dd></div>
                        <div><dt>SWIFT</dt><dd>{{ config('site.donations.bank.swift') }}</dd></div>
                    </dl>
                </div>

                <div class="card" style="border:1px solid var(--line); background:var(--white);">
                    <h3 class="h3">Card / online giving</h3>
                    <p>{{ config('site.donations.card.note') }}</p>
                    @if (config('site.donations.card.url'))
                        <a class="link-arrow" href="{{ config('site.donations.card.url') }}" target="_blank" rel="noreferrer">Give online →</a>
                    @endif
                </div>

                <p class="small">
                    Placeholder payment details — update them once in
                    <code>config/site.php</code> and they appear everywhere on this site.
                </p>
            </div>

            <!-- DONATION PLEDGE FORM -->
            <div class="card reveal" style="border:1px solid var(--line); background:var(--white); align-self:start;">
                <h2 class="h3">Record your donation pledge</h2>
                <p class="small">
                    Made a transfer or M-Pesa payment? Tell us so we can send
                    your receipt and confirm allocation.
                </p>

                <form class="form" action="{{ route('donate.store') }}" method="post" aria-label="Donation pledge form" style="margin-top:1rem;">
                    @csrf
                    @if (session('success'))
                        <p class="small" style="color:green; font-weight:600;">{{ session('success') }}</p>
                    @endif
                    @if ($errors->any())
                        <ul class="small" style="color:#b91c1c;">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="field">
                        <label for="donate-name">Full name</label>
                        <input id="donate-name" name="name" type="text" required autocomplete="name" />
                    </div>

                    <div class="field">
                        <label for="donate-email">Email</label>
                        <input id="donate-email" name="email" type="email" required autocomplete="email" />
                    </div>

                    <div class="field">
                        <label for="donate-amount">Donation amount (KES)</label>
                        <input id="donate-amount" name="amount" type="number" min="1" step="500" required placeholder="e.g. 10000" />
                    </div>

                    <div class="field">
                        <label for="donate-purpose">Purpose</label>
                        <select id="donate-purpose" name="purpose" required>
                            <option value="">Select a purpose</option>
                            <option value="farming">Climate-smart agriculture</option>
                            <option value="conservation">Environmental conservation</option>
                            <option value="empowerment">Youth &amp; women empowerment</option>
                            <option value="food-security">Food security &amp; resilience</option>
                            <option value="where-needed">Where needed most</option>
                        </select>
                    </div>

                    <div class="form-actions">
                        <button class="btn btn-green" type="submit">Confirm pledge</button>
                        <a class="btn" href="/contact">Ask a question</a>
                    </div>

                    <p class="small">
                        Pledge recording is a UI preview — connect it to your
                        payment provider or email endpoint to go live.
                    </p>
                </form>
            </div>

        </div>

    </div>
</section>

<!-- DONATION FAQ -->
<section class="section">
    <div class="container" style="max-width:820px;">

        <div class="section-head reveal">
            <div class="section-head-copy">
                <p class="eyebrow"><span class="num">03</span> Questions</p>
                <h2 class="h2">Donation FAQ.</h2>
            </div>
        </div>

        <div class="faq reveal">
            <details open>
                <summary>Is my donation acknowledged?</summary>
                <div class="faq-answer">Yes. Every confirmed donation receives a receipt, and designated gifts receive an allocation note showing the program your support went to.</div>
            </details>
            <details>
                <summary>Can I direct my gift to a specific program?</summary>
                <div class="faq-answer">Yes — choose a purpose in the pledge form or add a reference when paying by M-Pesa or bank transfer.</div>
            </details>
            <details>
                <summary>Do you accept international donations?</summary>
                <div class="faq-answer">Yes. Contact us for wire transfer details including SWIFT, and we will provide documentation for your records.</div>
            </details>
            <details>
                <summary>How is my support used?</summary>
                <div class="faq-answer">The large majority goes directly to program delivery — training, materials, restoration work, and community facilitation. A share covers the logistics that make field work possible.</div>
            </details>
            <details>
                <summary>Can my company match my donation?</summary>
                <div class="faq-answer">Many employers do. Reach out via the contact form and we will provide whatever documentation your matching-gift program requires.</div>
            </details>
        </div>

    </div>
</section>

@endsection

