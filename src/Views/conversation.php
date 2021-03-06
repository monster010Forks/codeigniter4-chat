<div class="card chat-conversation">
	<div class="card-header"><?= $conversation->name ?? 'Chat' ?></div>

	<div class="card-body overflow-auto" style="max-height: 300px;">
		<div id="conversation-<?= $conversation->id ?>" class="chat-messages">

			<?php foreach ($conversation->messages as $message): ?>

			<?= view('Tatter\Chat\Views\message', ['message' => $message]) ?>

			<?php endforeach; ?>
		</div>
	</div>

	<div class="card-footer">
		<form action="<?= site_url('chatapi/messages') ?>" method="post" onsubmit="sendMessage(this); return false;">
			<input name="conversation" type="hidden" value="<?= $conversation->id ?>">

			<div class="input-group d-flex">
				<textarea class="flex-fill" name="content" data-autoresize rows="1" placeholder="Type your message..." aria-describedby="button-send"></textarea>

				<div class="input-group-append">
					<input type="submit" class="btn btn-outline-dark" id="button-send" value="Send">
				</div>
			</div>
		</form>
	</div>

</div>
