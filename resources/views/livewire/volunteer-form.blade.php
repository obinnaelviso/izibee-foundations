<div class="row">
    <div class="col-md-8 m-auto">
        <h4 class="mb-3">Fill in the form below with your information</h4>
        <p class="fw-bold"><span class="text-red">PLEASE NOTE:</span> Entering incomplete contact information/address may delay your application. Kindly ensure to enter verifiable details as we ensure to do due diligence check on every application to protect our volunteers.</p>
        <p>By submitting this form, you agree that you have fully read and accepted our <a href="{{ route('volunteer.community-service-pledge') }}" target="_blank" class="btn-link">community service pledge</a></p>
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
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="">Date of Birth <span class="text-red fw-bold">*</span></label>
                        <input type="text" class="form-control datepicker_input" name="dob" placeholder="DD/MM/YYYY" wire:model="dob">
                        @error('dob')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="gender">Sex <span class="text-red fw-bold">*</span></label>
                        <select wire:model.lazy="gender" id="gender" class="form-control" required>
                            <option value="">- Select -</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                        @error('gender')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="">Nationality <span class="text-red fw-bold">*</span></label>
                        <input type="text" class="form-control" name="nationality" wire:model.lazy="nationality" required>
                        @error('nationality')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="">State of Origin <span class="text-red fw-bold">*</span></label>
                        <input type="text" class="form-control" name="state" wire:model.lazy="state" required>
                        @error('state')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="form-group">
                        <label for="">L.G.A of Origin <span class="text-red fw-bold">*</span></label>
                        <input type="text" class="form-control" name="lga" wire:model.lazy="lga" required>
                        @error('lga')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="form-group">
                        <label for="">Marital Status <span class="text-red fw-bold">*</span></label>
                        <input type="text" class="form-control" name="marital_status" wire:model.lazy="marital_status" required>
                        @error('marital_status')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="form-group">
                        <label for="">Occupation <span class="text-red fw-bold">*</span></label>
                        <input type="text" class="form-control" name="occupation" wire:model.lazy="occupation">
                        @error('occupation')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="form-group">
                        <label for="">House Address <span class="text-red fw-bold">*</span></label>
                        <input type="text" class="form-control" name="address" wire:model.lazy="address" required>
                        @error('address')
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
                <div class="col-md-12 mb-3">
                    <div class="form-group">
                        <label for="qualification">Educational Qualification, and Other Professional Attainment <span class="text-red fw-bold">*</span></label>
                        <textarea name="qualification" id="qualification" cols="10" rows="5" class="form-control" wire:model.lazy="qualification"></textarea>
                        @error('qualification')
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
