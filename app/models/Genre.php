<?php

class Genre extends Model
{

	public function getAll()
	{
		$sql = "SELECT * FROM m_genre WHERE deleted_at IS NULL";

		return $this->query($sql);
	}

	public function getFilmByGenre($genre_id)
	{
		$film_sql = "SELECT tb_film_genre.film_id, m_film.name, m_film.picture, m_film.description, m_genre.name AS genre FROM tb_film_genre JOIN m_genre ON m_genre.genre_id = tb_film_genre.genre_id JOIN m_film ON m_film.film_id = tb_film_genre.film_id WHERE tb_film_genre.genre_id = 4 AND tb_film_genre.deleted_at IS NULL";
		$s = "SELECT m_genre.genre_id, "
	}
}
