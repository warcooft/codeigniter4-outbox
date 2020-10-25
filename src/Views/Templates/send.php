<?= $this->extend(config('Outbox')->layout) ?>
<?= $this->section('main') ?>

	<div class="row">
		<div class="col">
			<h1>Send Email</h1>
			<h2 class="mb-3">Template: <?= $template->name ?></h2>

			<form name="email-template-send" action="<?= site_url('emails/templates/send/' . $template->id) ?>" method="post">
				<div class="form-group row">
					<label for="fromEmail" class="col-sm-2 col-form-label">
						From address
					</label>
					<div class="col-sm-10">
						<input
							name="fromEmail"
							type="text"
							id="fromEmail"
							value="<?= old('fromEmail', config('Email')->fromEmail) ?>"
							placeholder="jill@example.com"
						/>
					</div>
				</div>
				<div class="form-group row">
					<label for="fromName" class="col-sm-2 col-form-label">
						From name
					</label>
					<div class="col-sm-10">
						<input
							name="fromName"
							type="text"
							id="fromName"
							value="<?= old('fromName', config('Email')->fromName) ?>"
							placeholder="Jill Smith"
						/>
					</div>
				</div>
				<div class="form-group row">
					<label for="recipients" class="col-sm-2 col-form-label">
						Recipients
					</label>
					<div class="col-sm-10">
						<input
							name="recipients"
							type="text"
							id="recipients"
							value="<?= old('recipients', config('Email')->recipients) ?>"
							placeholder="email1@exmaple.com, email2@example.com"
						/>
					</div>
				</div>

				<h5>Tokens</h5>

				<?php foreach ($template->tokens as $token): ?>
				<div class="form-group row">
					<label for="<?= $token ?>" class="col-sm-2 col-form-label">
						<span class="badge badge-secondary"><?= $token ?></span>
					</label>
					<div class="col-sm-10">
						<input name="<?= $token ?>" type="text" id="<?= $token ?>" value="<?= old($token) ?>" placeholder="<?= $token ?>">
					</div>
				</div>
				<?php endforeach; ?>

				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>

<?= $this->endSection() ?>
