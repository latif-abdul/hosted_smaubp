<script setup>
    import { ref, defineEmits } from 'vue';

    const emit = defineEmits(['submit-reply', 'cancel-reply']);

    const replyText = ref('');

    const submitForm = () => {
    if (replyText.value.trim()) {
        emit('submit-reply', replyText.value.trim());
        replyText.value = ''; // Clear form after submission
    }
    };

    const cancelForm = () => {
    replyText.value = ''; // Clear form
    emit('cancel-reply');
    };
</script>

<template>
    <form class="post-reply">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<span>Name *</span>
							<input class="input" type="text" name="name">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<span>Email *</span>
							<input class="input" type="email" name="email">
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<textarea class="input" name="message" placeholder="Message"></textarea>
						</div>
						<button @click="submitForm" :disabled="!replyText.trim()" class="primary-button">Submit</button>
                        <button @click="cancelForm" class="primary-button">Cancel</button>
					</div>
				</div>
			</form>
</template>