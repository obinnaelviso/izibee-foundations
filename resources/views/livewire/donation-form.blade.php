<div class="row">
    <div class="col-md-8 m-auto">
        <h4 class="mb-3">Complete the form below with your information</h4>
        <form wire:submit.prevent="submitDonation">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="form-group">
                        <label for="">Full Name <span class="text-danger fw-bold">*</span></label>
                        <input type="text" class="form-control" wire:model.lazy="name" required>
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="form-group">
                        <label for="">Email Address <span class="text-danger fw-bold">*</span></label>
                        <input type="email" class="form-control" wire:model.lazy="email" required>
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
                            <option>Send a Child to School</option>
                            <option>Provide clean water for a child</option>
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
                                    <input type="radio" class="form-check-input" wire:model.lazy="amount" value="5000" checked>
                                    {{ config('app.currency') }}5,000
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-1">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" wire:model.lazy="amount" value="10000">
                                    {{ config('app.currency') }}10,000
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-1">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" wire:model.lazy="amount" value="20000">
                                    {{ config('app.currency') }}20,000
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-1">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" wire:model.lazy="amount" value="30000">
                                    {{ config('app.currency') }}30,000
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-1">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" wire:model.lazy="amount" value="40000">
                                    {{ config('app.currency') }}40,000
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-1">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" wire:model.lazy="amount" value="50000">
                                    {{ config('app.currency') }}50,000
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-1">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" wire:model.lazy="amount" value="">
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
                            <input type="radio" class="form-check-input" wire:model.lazy="payment_method" value="bank-transfer" checked>
                            Bank Transfer (Offline)
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" wire:model.lazy="payment_method" value="paystack">
                            Paystack
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    @if (!$processingPayment)
                        <button class="btn btn-warning w-100"> Donate</button>
                    @else
                        <button class="btn btn-warning" type="button" disabled> <i>Donating {{ config('app.currency').$sumAmount }}</i>...</button>
                    @endif
                </div>
            </div>
        </form>
    </div>
</div>
