<?php if ($status_signup): ?>
    <div class="status-card <?php echo $status_signup === 'success' ? 'success' : 'error'; ?>">
        <?php if ($status_signup === 'success'): ?>
            ✅ Signup completed successfully!
            <button class="click">ok</button>
        <?php else: ?>
            ❌ Signup failed: <?= htmlspecialchars($msg_signup) ?>
        <?php endif; ?>
    </div>
<?php endif; ?>

<script>
    let button = document.querySelector(".click");
    let card = document.querySelector(".status-card");

    if (button) {
        button.addEventListener('click', () => {
            card.style.display = 'none';

            // 🔹 URL se query string hatao
            if (window.history.replaceState) {
                window.history.replaceState(null, null, window.location.pathname);
            }
        });
    }
</script>
