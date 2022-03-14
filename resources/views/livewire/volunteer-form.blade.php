<div class="row">
    <div class="col-lg-8 m-auto">
        <h4 class="mb-3">Fill in the form below with your information</h4>
        <p class="fw-bold"><span class="text-red">PLEASE NOTE:</span> Entering incomplete contact information/address may delay your application. Kindly ensure to enter verifiable details as we ensure to do due diligence check on every application to protect our volunteers.</p>
        <p>By submitting this form, you agree that you have fully read and accepted our <a href="{{ route('volunteer.community-service-pledge') }}" target="_blank" class="btn-link">community service pledge</a></p>
        <form wire:submit.prevent="submitVolunteer">
            <h4 class="mb-3">PERSONAL DATA</h4>
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <div class="form-group">
                        <label for="">Full Name <span class="text-red fw-bold">*</span></label>
                        <input type="text" class="form-control" name="name" wire:model.lazy="name" required>
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6 mb-3">
                    <div class="form-group">
                        <label for="">Date of Birth <span class="text-red fw-bold">*</span></label>
                        <input type="text" class="form-control datepicker_input" name="dob" placeholder="DD/MM/YYYY" wire:model="dob">
                        @error('dob')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6 mb-3">
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
                <div class="col-lg-6 mb-3">
                    <div class="form-group">
                        <label for="">Nationality <span class="text-red fw-bold">*</span></label>
                        <input type="text" class="form-control" name="nationality" wire:model.lazy="nationality" required>
                        @error('nationality')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6 mb-3">
                    <div class="form-group">
                        <label for="">State of Origin <span class="text-red fw-bold">*</span></label>
                        <input type="text" class="form-control" name="state" wire:model.lazy="state" required>
                        @error('state')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6 mb-3">
                    <div class="form-group">
                        <label for="">L.G.A of Origin <span class="text-red fw-bold">*</span></label>
                        <input type="text" class="form-control" name="lga" wire:model.lazy="lga" required>
                        @error('lga')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6 mb-3">
                    <div class="form-group">
                        <label for="marital_status">Marital Status <span class="text-red fw-bold">*</span></label>
                        <input type="text" class="form-control" name="marital_status" wire:model.lazy="marital_status" required>
                        @error('marital_status')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 mb-3">
                    <div class="form-group">
                        <label for="">Occupation <span class="text-red fw-bold">*</span></label>
                        <input type="text" class="form-control" name="occupation" wire:model.lazy="occupation">
                        @error('occupation')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6 mb-3">
                    <div class="form-group">
                        <label for="">House Address <span class="text-red fw-bold">*</span></label>
                        <input type="text" class="form-control" name="address" wire:model.lazy="address" required>
                        @error('address')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6 mb-3">
                    <div class="form-group">
                        <label for="">Email Address <span class="text-red fw-bold">*</span></label>
                        <input type="email" class="form-control" name="email" wire:model.lazy="email" required>
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6 mb-3">
                    <div class="form-group">
                        <label for="">Phone Number <span class="text-red fw-bold">*</span></label>
                        <input type="text" class="form-control" name="phone" wire:model.lazy="phone" required placeholder="+234XXXXXXXXXXX">
                        @error('phone')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6 mb-3">
                    <div class="form-group">
                        <label for="">Alternate Phone Number</label>
                        <input type="text" class="form-control" name="phone_2" wire:model.lazy="phone_2" placeholder="+234XXXXXXXXXXX">
                        @error('phone_2')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 mb-3">
                    <div class="form-group">
                        <label for="qualification">Educational Qualification <span class="text-red fw-bold">*</span></label>
                        <input type="text" class="form-control" name="qualification" wire:model.lazy="qualification">
                        @error('qualification')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="form-group">
                        <label for="facebook">Facebook Handle</label>
                        <input type="text" class="form-control" name="facebook" wire:model.lazy="facebook">
                        @error('facebook')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="form-group">
                        <label for="twitter">Twitter Handle</label>
                        <input type="text" class="form-control" name="twitter" wire:model.lazy="twitter">
                        @error('twitter')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="form-group">
                        <label for="instagram">Instagram Handle</label>
                        <input type="text" class="form-control" name="instagram" wire:model.lazy="instagram">
                        @error('instagram')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-lg-12">
                    Have you worked with an NGO?
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="worked_with_ngo" wire:model.lazy="worked_with_ngo" id="worked-with-ngo-yes" value="yes">
                        <label class="form-check-label" for="worked-with-ngo-yes">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="worked_with_ngo" wire:model.lazy="worked_with_ngo" id="worked-with-ngo-no" value="no" checked>
                        <label class="form-check-label" for="worked-with-ngo-no">No</label>
                    </div>
                </div>
                @if ($worked_with_ngo == 'yes')
                    <div class="col-lg-12">
                        <label for="ngo-name">If yes, what is the name of the NGO?</label>
                        <input type="text" class="form-control" name="ngo_name" wire:model.lazy="ngo_name">
                    </div>
                @endif
            </div>
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <div class="form-group">
                        <label for="volunteer_reason">Why do you want to work as a Volunteer in IHF? <span class="text-red fw-bold">*</span></label>
                        <input type="text" class="form-control" name="volunteer_reason" wire:model.lazy="volunteer_reason">
                        @error('volunteer_reason')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
            <h4 class="mb-3">NEXT OF KIN DATA</h4>
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <div class="form-group">
                        <label for="kin_name">Full Name <span class="text-red fw-bold">*</span></label>
                        <input type="text" class="form-control" name="kin_name" wire:model.lazy="kin_name">
                        @error('kin_name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-3">
                    <div class="form-group">
                        <label for="kin_gender">Sex <span class="text-red fw-bold">*</span></label>
                        <select wire:model.lazy="kin_gender" id="kin_gender" class="form-control" required>
                            <option value="">- Select -</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                        @error('kin_gender')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6 mb-3">
                    <div class="form-group">
                        <label for="kin_marital_status">Marital Status <span class="text-red fw-bold">*</span></label>
                        <input type="text" class="form-control" name="kin_marital_status" wire:model.lazy="kin_marital_status" required>
                        @error('kin_marital_status')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6 mb-3">
                    <div class="form-group">
                        <label for="">Nationality <span class="text-red fw-bold">*</span></label>
                        <input type="text" class="form-control" name="kin_nationality" wire:model.lazy="kin_nationality" required>
                        @error('kin_nationality')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6 mb-3">
                    <div class="form-group">
                        <label for="">State of Origin <span class="text-red fw-bold">*</span></label>
                        <input type="text" class="form-control" name="kin_state" wire:model.lazy="kin_state" required>
                        @error('kin_state')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6 mb-3">
                    <div class="form-group">
                        <label for="">L.G.A of Origin <span class="text-red fw-bold">*</span></label>
                        <input type="text" class="form-control" name="kin_lga" wire:model.lazy="kin_lga" required>
                        @error('kin_lga')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6 mb-3">
                    <div class="form-group">
                        <label for="">Next of Kin Relationship <span class="text-red fw-bold">*</span></label>
                        <input type="text" class="form-control" name="kin_relationship" wire:model.lazy="kin_relationship" required>
                        @error('kin_relationship')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 mb-3">
                    <div class="form-group">
                        <label for="">Address <span class="text-red fw-bold">*</span></label>
                        <input type="text" class="form-control" name="kin_address" wire:model.lazy="kin_address" required>
                        @error('kin_address')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6 mb-3">
                    <div class="form-group">
                        <label for="">Email Address</label>
                        <input type="email" class="form-control" name="kin_email" wire:model.lazy="kin_email" required>
                        @error('kin_email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6 mb-3">
                    <div class="form-group">
                        <label for="">Phone Number <span class="text-red fw-bold">*</span></label>
                        <input type="text" class="form-control" name="kin_phone" wire:model.lazy="kin_phone" required placeholder="+234XXXXXXXXXXX">
                        @error('kin_phone')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-12 mb-3">
                    <label for="">
                        Have you ever been convicted of any crime before?
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="convicted" wire:model.lazy="convicted" id="convicted-yes" value="yes">
                            <label class="form-check-label" for="convicted-yes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="convicted" wire:model.lazy="convicted" id="convicted-no" value="no" checked>
                            <label class="form-check-label" for="convicted-no">No</label>
                        </div>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <p>
                        <span class="text-red fw-bold">NOTE:</span> Under the <span class="fw-bold">{{ strtoupper(config('app.name')) }}</span>, you must work in accordance with the fundamental principle of the organization and will maintain highest standard of discretion with respect to any information attained during your course of volunteer work.
                    </p>
                    <p>I hereby certify in my honor that the above information is true and correct.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
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
