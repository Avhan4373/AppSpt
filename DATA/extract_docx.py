from docx import Document
import json
import csv

def extract_hierarchy(doc_path):
    """
    Fungsi untuk mengekstrak hierarki dari dokumen .docx.
    """
    # Buka dokumen
    doc = Document(doc_path)
    
    # Inisialisasi struktur data
    hierarchy = {}
    current_category = None
    current_subcategory = None
    
    # Iterasi melalui paragraf dalam dokumen
    for paragraph in doc.paragraphs:
        text = paragraph.text.strip()
        
        # Identifikasi kategori utama (Level 1)
        if paragraph.style.name == 'Heading 1':
            current_category = text
            hierarchy[current_category] = {}
        
        # Identifikasi subkategori (Level 2)
        elif paragraph.style.name == 'Heading 2' and current_category:
            current_subcategory = text
            hierarchy[current_category][current_subcategory] = []
        
        # Identifikasi rinciankategori (Level 3)
        elif text.startswith('   - ') and current_category and current_subcategory:
            hierarchy[current_category][current_subcategory].append(text[5:])
        elif text.startswith('- ') and current_category and not current_subcategory:
            # Jika tidak ada subkategori, tambahkan langsung ke kategori utama
            if isinstance(hierarchy[current_category], dict):
                hierarchy[current_category] = []
            hierarchy[current_category].append(text[2:])
    
    return hierarchy

def save_to_json(data, output_file):
    """
    Fungsi untuk menyimpan data ke file JSON.
    """
    with open(output_file, 'w') as f:
        json.dump(data, f, indent=4)
    print(f"Hasil disimpan ke {output_file}")

def save_to_csv(data, output_file):
    """
    Fungsi untuk menyimpan data ke file CSV.
    """
    with open(output_file, 'w', newline='') as f:
        writer = csv.writer(f)
        writer.writerow(['Kategori', 'Subkategori', 'Rincian'])
        for category, subcategories in data.items():
            if isinstance(subcategories, dict):
                for subcategory, details in subcategories.items():
                    for detail in details:
                        writer.writerow([category, subcategory, detail])
            else:
                for subcategory in subcategories:
                    writer.writerow([category, subcategory, ''])
    print(f"Hasil disimpan ke {output_file}")

# Path ke dokumen .docx
doc_path = '/home/avhan/Documents/APLIKASI/FILAMENT/AppSpt/DATA/data.docx'  # Sesuaikan dengan nama file Anda
output_json = '/home/avhan/Documents/APLIKASI/FILAMENT/AppSpt/DATA/output.json'  # Path untuk output JSON
output_csv = '/home/avhan/Documents/APLIKASI/FILAMENT/AppSpt/DATA/output.csv'    # Path untuk output CSV

# Ekstrak hierarki dari dokumen
hierarchy = extract_hierarchy(doc_path)

# Tampilkan hasil di terminal
print("Hasil Ekstraksi:")
for category, subcategories in hierarchy.items():
    print(f"Kategori: {category}")
    if isinstance(subcategories, dict):
        for subcategory, details in subcategories.items():
            print(f"  - Subkategori: {subcategory}")
            for detail in details:
                print(f"    - Rincian: {detail}")
    else:
        for subcategory in subcategories:
            print(f"  - Subkategori: {subcategory}")

# Simpan hasil ke file JSON
save_to_json(hierarchy, output_json)

# Simpan hasil ke file CSV
save_to_csv(hierarchy, output_csv)
