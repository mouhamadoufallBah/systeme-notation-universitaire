<div class="container py-5">
    <style>
        .exam-form-container {
            max-width: 600px;
            margin: 0 auto;
            font-family: system-ui, -apple-system, sans-serif;
            color: #334155;
        }
        .exam-form-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }
        .exam-form-header h2 {
            margin: 0;
            font-weight: 700;
            color: #1e293b;
        }
        .btn-back {
            color: #475569;
            background-color: #f1f5f9;
            border: 1px solid #cbd5e1;
            padding: 0.4rem 0.8rem;
            border-radius: 0.5rem;
            text-decoration: none;
            font-size: 0.85rem;
            font-weight: 500;
            transition: all 0.2s;
        }
        .btn-back:hover {
            background-color: #e2e8f0;
            color: #0f172a;
        }
        .exam-form-card {
            background: #ffffff;
            border-radius: 0.75rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -2px rgba(0, 0, 0, 0.05);
            border: 1px solid #e2e8f0;
            padding: 2rem;
        }
        .form-group {
            margin-bottom: 1.25rem;
        }
        .form-label {
            display: block;
            font-weight: 600;
            font-size: 0.9rem;
            color: #334155;
            margin-bottom: 0.5rem;
        }
        .form-control {
            width: 100%;
            padding: 0.75rem 1rem;
            font-size: 0.95rem;
            border: 1px solid #cbd5e1;
            border-radius: 0.5rem;
            background-color: #f8fafc;
            color: #0f172a;
            outline: none;
            transition: all 0.2s;
            box-sizing: border-box;
        }
        .form-control:focus {
            border-color: #2563eb;
            background-color: #ffffff;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }
        .btn-submit {
            display: inline-block;
            background-color: #2563eb;
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            border: none;
            font-weight: 600;
            font-size: 0.95rem;
            cursor: pointer;
            transition: background-color 0.2s;
            width: 100%;
            text-align: center;
        }
        .btn-submit:hover {
            background-color: #1d4ed8;
        }
    </style>

    <div class="exam-form-container">
        <div class="exam-form-header">
            <h2>Soumettre une copie d'examen</h2>
            <a href="/copies" class="btn-back">← Retour</a>
        </div>

        <div class="exam-form-card">
            <!-- Attention à bien pointer vers /copies si ton routeur POST écoute sur cette route -->
            <form action="/copies" method="POST">
                <div class="form-group">
                    <label for="note_brute" class="form-label">Note Brute</label>
                    <input type="number" step="0.5" class="form-control" id="note_brute" name="note_brute" value="15.5" required>
                </div>

                <div class="form-group">
                    <label for="date_depot" class="form-label">Date et heure de dépôt</label>
                    <input type="datetime-local" class="form-control" id="date_depot" name="date_depot" value="2026-06-06T10:00" required>
                </div>

                <div class="form-group" style="margin-bottom: 1.75rem;">
                    <label for="date_limite" class="form-label">Date limite</label>
                    <input type="datetime-local" class="form-control" id="date_limite" name="date_limite" value="2026-06-05T23:59" required>
                </div>

                <button type="submit" class="btn-submit">Soumettre la copie</button>
            </form>
        </div>
    </div>
</div>