@extends('layouts.app')

@section('title','Donate | Great Africa')

@section('content')
<section class="section" aria-labelledby="donate-title">
  <h1 class="section-title" id="donate-title">Donate to Great Africa</h1>
  <p class="section-lead" style="max-width:75ch;">
    Your donation supports climate-smart agriculture, environmental conservation, and youth and women empowerment across Kenya and Africa.
  </p>

  <div class="split" style="margin-top:18px;">
    <div class="card">
      <h3>Choose a way to give</h3>
      <p class="small">Placeholder donation options. Replace with your official donation links and payment instructions.</p>

      <div class="grid-3" style="grid-template-columns:1fr; margin-top:14px;">
        <div class="card" style="padding:14px;">
          <h3 style="font-size:16px;margin-bottom:6px;">M-Pesa (placeholder)</h3>
          <p class="small">Provider: XXXX • Paybill/Till: XXXXX • Account name: GREAT AFRICA • Reference: DONATION</p>
        </div>
        <div class="card" style="padding:14px;">
          <h3 style="font-size:16px;margin-bottom:6px;">Bank transfer (placeholder)</h3>
          <p class="small">Bank: XXXX • Account number: XXXXX • Account name: GREAT AFRICA</p>
        </div>
        <div class="card" style="padding:14px;">
          <h3 style="font-size:16px;margin-bottom:6px;">Card / online (placeholder)</h3>
          <p class="small">Add your PayPal/online donation link here.</p>
        </div>
      </div>

      <hr class="sep" />

      <h3>Suggested giving amounts (optional)</h3>
      <p class="small">
        • KES 2,000 — training materials
        <br/>• KES 10,000 — conservation support
        <br/>• KES 25,000 — program facilitation for community learning
      </p>
    </div>

    <div class="card">
      <h3>Donation form (UI preview)</h3>
      <form class="form" action="#" method="post" onsubmit="return false;" aria-label="Donation form">
        <div class="field">
          <label for="donate-name">Full name</label>
          <input id="donate-name" name="name" type="text" required />
        </div>
        <div class="field">
          <label for="donate-email">Email</label>
          <input id="donate-email" name="email" type="email" required />
        </div>
        <div class="field">
          <label for="donate-amount">Donation amount (KES)</label>
          <input id="donate-amount" name="amount" type="number" min="1" step="500" required placeholder="e.g., 10000" />
        </div>
        <div class="field">
          <label for="donate-purpose">Purpose</label>
          <select id="donate-purpose" name="purpose" required>
            <option value="">Select a purpose</option>
            <option value="farming">Climate-smart agriculture</option>
            <option value="conservation">Environmental conservation</option>
            <option value="empowerment">Youth & women empowerment</option>
            <option value="food-security">Food security & community resilience</option>
          </select>
        </div>

        <div class="form-actions">
          <button class="btn btn-primary" type="submit">Confirm donation request</button>
          <a class="btn btn-secondary" href="/contact">Ask questions</a>
        </div>

        <p class="small">Placeholder action. Connect to payment provider or Laravel route later.</p>
      </form>
    </div>
  </div>
</section>
@endsection

