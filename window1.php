  <?php if ($status_request): ?>
    <div class="status-card <?php echo $status_request === 'success' ? 'success' : 'error'; ?>">
        <?php if ($status_request === 'success'): ?>
            ✅ Request sent successfully!
            <button class="click">ok</button>
        <?php else: ?>
            ❌ Request failed: <?= htmlspecialchars($msg_request) ?>
        <?php endif; ?>
    </div>
<?php endif; ?>

<script>
    let button1 = document.querySelector(".click");
    let card1 = document.querySelector(".status-card");

    if (button1) {
        button1.addEventListener('click', () => {
            card1.style.display = 'none';

            // 🔹 URL se query string hatao
            if (window.history.replaceState) {
                window.history.replaceState(null, null, window.location.pathname);
            }
        });
    }
</script>