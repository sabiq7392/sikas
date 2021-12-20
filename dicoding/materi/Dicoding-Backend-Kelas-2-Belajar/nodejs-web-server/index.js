
const persons = ['Haryy', 'Potter', 'Daniel', 'Clara'];

// 🙃
for (let i = 0; i < persons.length; i++) {
  console.log(persons[i])
} 

// 😀
for (const person of persons) {
  console.log(person)
}

// 😍😘🥰
persons.forEach(person => console.log(person))

// output
Haryy
Potter
Daniel
Clara










































class hai {
  async editProductById(id, {name, price, qty}) {
    const updatedAt = new Date().toISOString();
  
    console.log(name, price, qty);
  
    if (name !== undefined && price !== undefined && qty !== undefined) {
      const result = await this.pool.query('UPDATE products SET name = ?, price = ?, qty = ?, updated_at = ? WHERE id = ?', [name, price, qty, updatedAt, id]);
  
      if (result.affectedRows === 0) {
        throw new NotFoundError('Gagal memperbarui product. Id tidak ditemukan');
      }


    } else if (name !== undefined && price !== undefined && qty === undefined) {
      const result = await this.pool.query('UPDATE products SET name = ?, price = ?, updated_at = ? WHERE id = ?', [name, price, updatedAt, id]);
  
      if (result.affectedRows === 0) {
        throw new NotFoundError('Gagal memperbarui product. Id tidak ditemukan');
      }



    } else if (name !== undefined && price === undefined && qty !== undefined) {
      const result = await this.pool.query('UPDATE products SET name = ?, qty = ?, updated_at = ? WHERE id = ?', [name, qty, updatedAt, id]);
  
      if (result.affectedRows === 0) {
        throw new NotFoundError('Gagal memperbarui product. Id tidak ditemukan');
      }



    } else if (name === undefined && price !== undefined && qty !== undefined) {
      const result = await this.pool.query('UPDATE products SET price = ?, qty = ?, updated_at = ? WHERE id = ?', [price, qty, updatedAt, id]);
  
      if (result.affectedRows === 0) {
        throw new NotFoundError('Gagal memperbarui product. Id tidak ditemukan');
      }
    } else if(name !== undefined) {
      const result = await this.pool.query('UPDATE products SET name = ?, updated_at = ? WHERE id = ?', [name, updatedAt, id]);
  
      if (result.affectedRows === 0) {
        throw new NotFoundError('Gagal memperbarui product. Id tidak ditemukan');
      }
    } else if(price !== undefined) {
      const result = await this.pool.query('UPDATE products SET price = ?, updated_at = ? WHERE id = ?', [price, updatedAt, id]);
  
      if (result.affectedRows === 0) {
        throw new NotFoundError('Gagal memperbarui product. Id tidak ditemukan');
      }
    } else if(qty !== undefined) {
      const result = await this.pool.query('UPDATE products SET qty = ?, updated_at = ? WHERE id = ?', [qty, updatedAt, id]);
  
      if (result.affectedRows === 0) {
        throw new NotFoundError('Gagal memperbarui product. Id tidak ditemukan');
      }
    } else {
      throw new InvariantError('Gagal memperbarui product');
    }
  }
}
