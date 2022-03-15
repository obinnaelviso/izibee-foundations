<div>
    <form wire:submit.prevent="submitContact">
        <div class="row">
            <div class="col-md-12 mb-3">
                <div class="form-group">
                    <label class="mb-1" for="name">Name <span class="text-red fw-bold">*</span></label>
                    <input type="text" class="form-control" name="name" wire:model.lazy='name' required>
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-12 mb-3">
                <div class="form-group">
                    <label class="mb-1" for="email">Email Address <span class="text-red fw-bold">*</span></label>
                    <input type="email" class="form-control" name="email" wire:model.lazy='email' required>
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-12 mb-3">
                <div class="form-group">
                    <label class="mb-1" for="subject">Subject <span class="text-red fw-bold">*</span></label>
                    <input type="subject" class="form-control" name="subject" wire:model.lazy='subject' required>
                    @error('subject')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-12 mb-3">
                <div class="form-group">
                    <label class="mb-1" for="message">Message <span class="text-red fw-bold">*</span></label>
                    <textarea name="message" id="message" cols="30" rows="10" class="form-control" wire:model.lazy="message"></textarea>
                    @error('message')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div wire:target="submitContact" wire:loading.remove>
                    <button class="btn btn-primary w-100 text-white"> Submit</button>
                </div>
                <div class="w-100" wire:target="submitContact" wire:loading>
                    <button class="btn btn-primary w-100 text-white" type="button" disabled> <i>Submitting...</i></button>
                </div>
            </div>
        </div>
    </form>
</div>
