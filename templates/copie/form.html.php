<div class="container mt-4">
    <h2>Soumettre une copie d'examen</h2>

    <form action="/copie/store" method="POST">
        <div class="mb-3">
            <label for="note_brute" class="form-label">Note Brute</label>
            <input type="number" step="0.5" class="form-control" id="note_brute" name="note_brute" value="15.5" required>
        </div>

        <div class="mb-3">
            <label for="date_depot" class="form-label">Date et heure de dépôt</label>
            <input type="datetime-local" class="form-control" id="date_depot" name="date_depot" value="2026-06-06T10:00" required>
        </div>

        <div class="mb-3">
            <label for="date_limite" class="form-label">Date limite</label>
            <input type="datetime-local" class="form-control" id="date_limite" name="date_limite" value="2026-06-05T23:59" required>
        </div>

        <button type="submit" class="btn btn-primary">Soumettre</button>
    </form>
</div>