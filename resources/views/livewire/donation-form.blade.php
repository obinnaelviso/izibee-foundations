<div class="row">
    <div class="col-md-8 m-auto">
        <div class="row">
            <div class="col-md-12 mb-3">
                <p class="text-success">
                    IZIBEE HALLMARK FOUNDATION REGISTERED ORGANISATION UNDER SECTION SECTION 590 OF THE COMPANIES AND ALLIED MATTERS ACT, CAP C20 LAWS OF THE FEDERATION OF NIGERIA 2010, AS A NON-PROFIT ORGANISATION WITH REGISTRATION NUMBER (CAC/IT/NO-159945).
                </p>
                <p>
                    Our programmes and initiatives have the ability to meet the direct needs of food security, health and safety,and educational support for our vulnerable communities. We are indeed grateful for donations to this end. While we at Izibee Hallmark Foundation hope to generate our own income and operate in a self-sustaining manner, as a non-profit organisation, we do rely on kind donations of individuals and organisations. The Covid19 pandemic and the Economic Recession which hit the world dealt a great blow to the ability of the Izibee Hallmark Foundation to sustainably generate income. We are delighted to accept donations for specific projects or more ‘general’ donations to be used where most needed. Be confident that all your contributions are 100% allocated to project delivery to meetimmediate needs, and future programmes designed to rebuild ourcommunities. Your kind donations will help build safer, better, and more sustainable communities.
                </p>
                <p class="text-muted">
                    Donors can also specify what their monetary contributions go towards (either our Campaign programmes, Entrepreneurial Development, or Community outreach initiatives) by selecting from a payment option below:
                </p>
            </div>
        </div>
        <h4 class="mb-3">Complete the form below with your information</h4>
        <form wire:submit.prevent="submitDonation">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="form-group">
                        <label for="">Full Name <span class="text-danger fw-bold">*</span></label>
                        <input type="text" class="form-control" name="name" wire:model.lazy="name" required>
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="form-group">
                        <label for="">Email Address <span class="text-danger fw-bold">*</span></label>
                        <input type="email" class="form-control" name="email" wire:model.lazy="email" required>
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="form-group">
                        <label for="campaign">Campaign <span class="text-danger fw-bold">*</span></label>
                        <select wire:model.lazy="campaign" id="campaign" class="form-control" required>
                            <option value="">- Select -</option>
                            <option>Sensitization Program</option>
                            <option>Help Out of School Children</option>
                            <option>Support Less Privileged Kids</option>
                            <option>Provide Clean Portable Water</option>
                            <option>Youth Empowerment and Skill Acquisition program</option>
                        </select>
                        @error('campaign')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="form-group">
                        <label for="campaign-news">How did you hear about this campaign? <span class="text-danger fw-bold">*</span></label>
                        <input type="text" class="form-control" wire:model.lazy="campaign_news" id="campaign-news">
                        @error('campaign_news')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <label>Amount to Donate <span class="text-danger fw-bold">*</span></label>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 mb-1">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="amount" wire:model.lazy="amount" value="5000" checked>
                                    {{ config('app.currency') }}5,000
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-1">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="amount" wire:model.lazy="amount" value="10000">
                                    {{ config('app.currency') }}10,000
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-1">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="amount" wire:model.lazy="amount" value="20000">
                                    {{ config('app.currency') }}20,000
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-1">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="amount" wire:model.lazy="amount" value="30000">
                                    {{ config('app.currency') }}30,000
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-1">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="amount" wire:model.lazy="amount" value="40000">
                                    {{ config('app.currency') }}40,000
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-1">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="amount" wire:model.lazy="amount" value="50000">
                                    {{ config('app.currency') }}50,000
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-1">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="amount" wire:model.lazy="amount" value="">
                                    Other Amount
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                @if ($amount == null)
                    <div class="col-md-6">
                        <label for="">Enter Amount</label>
                        <input type="text" class="form-control" wire:model.lazy="other_amount">
                    </div>
                @endif
                <div class="col-md-12">
                    @error('amount')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12 mb-3">
                    <div class="form-group">
                        <label for="recurring-payment">Recurring Payment <span class="text-danger fw-bold">*</span></label>
                        <select wire:model.lazy="recurring_payment" id="recurring-payment" class="form-control" required>
                            <option value="">- Select -</option>
                            <option>None</option>
                            <option>Monthly</option>
                            <option>Annually</option>
                        </select>
                        @error('recurring_payment')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <label>Select Payment Method</label>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="payment_method" wire:model.lazy="payment_method" value="bank-transfer" checked>
                            Bank Transfer (Offline)
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="payment_method" wire:model.lazy="payment_method" value="paystack">
                            Paystack
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    @if (!$processingPayment)
                        <button class="btn btn-primary w-100"> Donate</button>
                    @else
                        <button class="btn btn-primary" type="button" disabled> <i>Donating {{ config('app.currency').$sumAmount }}</i>...</button>
                    @endif
                </div>
            </div>
        </form>
    </div>
</div>
