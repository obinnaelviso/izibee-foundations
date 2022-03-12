<div class="row">
    <div class="col-md-8 m-auto">
        <h4 class="mb-3">Fill in the form below with your information</h4>
        <p class="fw-bold"><span class="text-red">PLEASE NOTE:</span> Entering incomplete contact information/address may delay your application. Kindly ensure to enter verifiable details as we ensure to do due diligence check on every application to protect our volunteers.</p>
        <p>By submitting this form, you agree that you have fully read and accepted our <a href="#" target="_blank">community service pledge</a></p>
        <form wire:submit.prevent="submitVolunteer">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="form-group">
                        <label for="">Full Name <span class="text-red fw-bold">*</span></label>
                        <input type="text" class="form-control" name="name" wire:model.lazy="name" required>
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="form-group">
                        <label for="">Email Address <span class="text-red fw-bold">*</span></label>
                        <input type="email" class="form-control" name="email" wire:model.lazy="email" required>
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="form-group">
                        <label for="">Address <span class="text-red fw-bold">*</span></label>
                        <input type="text" class="form-control" name="address" wire:model.lazy="address" required>
                        @error('address')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="">City <span class="text-red fw-bold">*</span></label>
                        <input type="text" class="form-control" name="city" wire:model.lazy="city" required placeholder="Warri">
                        @error('city')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="">State <span class="text-red fw-bold">*</span></label>
                        <input type="text" class="form-control" name="state" wire:model.lazy="state" required placeholder="Delta">
                        @error('state')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="form-group">
                        <label for="">Country <span class="text-red fw-bold">*</span></label>
                        <input type="text" class="form-control" name="country" wire:model.lazy="country" required placeholder="Nigeria">
                        @error('country')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="">Phone Number <span class="text-red fw-bold">*</span></label>
                        <input type="text" class="form-control" name="phone" wire:model.lazy="phone" required placeholder="+234XXXXXXXXXXX">
                        @error('phone')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="">Alternate Phone Number</label>
                        <input type="text" class="form-control" name="phone_2" wire:model.lazy="phone_2" placeholder="+234XXXXXXXXXXX">
                        @error('phone_2')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="">Facebook Handle</label>
                        <input type="text" class="form-control" name="facebook" wire:model.lazy="facebook">
                        @error('facebook')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="">Instagram Handle</label>
                        <input type="text" class="form-control" name="instagram" wire:model.lazy="instagram">
                        @error('instagram')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="form-group">
                        <label for="shirt_size">Shirt Size <span class="text-red fw-bold">*</span></label>
                        <select wire:model.lazy="shirt_size" id="shirt_size" class="form-control" required>
                            <option value="">- Select -</option>
                            <option>S</option>
                            <option>M</option>
                            <option>L</option>
                            <option>XL</option>
                            <option>XXL</option>
                            <option>XXXL</option>
                        </select>
                        @error('shirt_size')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label>Are you available for impromptu mini outreach <span class="text-red fw-bold">*</span></label>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6 mb-1">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="impromptu" wire:model.lazy="impromptu" value="yes">
                                        Yes
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-1">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="impromptu" wire:model.lazy="impromptu" value="no" checked>
                                        No
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="">Occupation <span class="text-red fw-bold">*</span></label>
                        <input type="text" class="form-control" name="occupation" wire:model.lazy="occupation">
                        @error('occupation')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="">Organization/Place of Work <span class="text-red fw-bold">*</span></label>
                        <input type="text" class="form-control" name="workplace" wire:model.lazy="workplace">
                        @error('workplace')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="">Date of Birth <span class="text-red fw-bold">*</span></label>
                        <input type="text" class="form-control datepicker_input" name="dob" placeholder="DD/MM/YYYY" wire:model="dob">
                        @error('dob')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="form-group">
                        <label for="reason">Why do you want to volunteer with {{ config('app.name') }}? <span class="text-red fw-bold">*</span></label>
                        <input type="text" class="form-control" wire:model.lazy="reason" id="reason" name="reason">
                        @error('reason')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div wire:target="submitVolunteer" wire:loading.remove>
                        <button class="btn btn-primary w-100 text-white"> Submit</button>
                    </div>
                    <div class="w-100" wire:target="submitVolunteer" wire:loading>
                        <button class="btn btn-primary w-100 text-white" type="button" disabled> <i>Submitting...</i></button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
