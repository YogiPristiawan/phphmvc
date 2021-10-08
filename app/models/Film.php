<?php

class Film extends Model
{
	public function getAll()
	{

		$film_sql = "SELECT * FROM m_film";
		$genre_sql = "SELECT m_genre.genre_id, m_genre.name AS genre, tb_film_genre.film_id FROM m_genre JOIN tb_film_genre ON tb_film_genre.genre_id = m_genre.genre_id";
		$pemeran_sql = "SELECT m_pemeran.pemeran_id, m_pemeran.name AS pemeran, tb_film_pemeran.film_id FROM m_pemeran JOIN tb_film_pemeran ON tb_film_pemeran.pemeran_id = m_pemeran.pemeran_id";


		$film = $this->query("$film_sql");
		$genre = $this->query($genre_sql);
		$pemeran = $this->query($pemeran_sql);

		foreach ($film as $fIndex => $f) {
			foreach ($genre as $g) {
				if ($g['film_id'] == $f['film_id']) {
					$film[$fIndex]['genre'][] = ['genre_id' => $g['genre_id'], 'name' => $g['genre']];
				}
			}

			foreach ($pemeran as $p) {
				if ($p['film_id'] == $f['film_id']) {
					$film[$fIndex]['pemeran'][] = ['pemeran_id' => $p['pemeran_id'], 'name' => $p['pemeran']];
				}
			}
		}

		return $film;
	}
}
