<?php
class Model_grafik extends CI_Model{

public function get_data_tren(){
        $query = $this->db->query("SELECT id_kategori,sentimen,count(id_berita) AS jumlah_id FROM berita GROUP BY id_kategori");
         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

public function get_tag()
    {
        $query = "SELECT SUM(case when tag like '%Wonosobo-Sehat%' then 1 else 0 end) AS Wonosobo_Sehat,
          SUM(case when tag like '%Wonosobo-Aman%' then 1 else 0 end) AS Wonosobo_Aman ,
          SUM(case when tag like '%Wonosobo-Pintar%' then 1 else 0 end) AS Wonosobo_Pintar ,
          SUM(case when tag like '%Wonosobo-Makmur%' then 1 else 0 end) AS Wonosobo_Makmur ,
          SUM(case when tag like '%Wonosobo-Maer%' then 1 else 0 end) AS Wonosobo_Maer , 
          SUM(case when tag like '%Bupati-Wonosobo%' then 1 else 0 end) AS Bupati_Wonosobo,
          SUM(case when tag like '%Wakil-Bupati-Wonosobo%' then 1 else 0 end) AS Wakil_Bupati_Wonosobo
          FROM `berita`";

        return $this->db->query($query)->result();
    }

    public function get_media()//no use
    {
        $query = "SELECT SUM(case when id_media = '1' then 1 else 0 end) AS kompascom,
        SUM(case when id_media = '2' then 1 else 0 end) AS detikcom ,
        SUM(case when id_media = '3' then 1 else 0 end) AS radarsemarangjawaposcom ,
        SUM(case when id_media = '4' then 1 else 0 end) AS kabarwonosobopikiranrakyatcom ,
        SUM(case when id_media = '5' then 1 else 0 end) AS derapjuangid , 
        SUM(case when id_media = '6' then 1 else 0 end) AS infopublikid , 
        SUM(case when id_media = '7' then 1 else 0 end) AS newswsbmyid , 
        SUM(case when id_media = '8' then 1 else 0 end) AS wwwsoloposcom , 
        SUM(case when id_media = '9' then 1 else 0 end) AS suarabaruid , 
        SUM(case when id_media = '10' then 1 else 0 end) AS republikacoid , 
        SUM(case when id_media = '11' then 1 else 0 end) AS jatengantaranewscom , 
        SUM(case when id_media = '12' then 1 else 0 end) AS wwwmedianasionalid , 
        SUM(case when id_media = '13' then 1 else 0 end) AS todaylinemeid , 
        SUM(case when id_media = '14' then 1 else 0 end) AS rricoidsemarang , 
        SUM(case when id_media = '15' then 1 else 0 end) AS pesonafmwonosobo , 
        SUM(case when id_media = '16' then 1 else 0 end) AS webtv , 
        SUM(case when id_media = '17' then 1 else 0 end) AS wonosobozone , 
        SUM(case when id_media = '18' then 1 else 0 end) AS magelangeksprescom , 
        SUM(case when id_media = '19' then 1 else 0 end) AS wonosobosorotco, 

        SUM(case when id_media = '20' then 1 else 0 end) AS wonosobohebat, 
        SUM(case when id_media = '21' then 1 else 0 end) AS kompascom, 
        SUM(case when id_media = '22' then 1 else 0 end) AS bernasid, 
        SUM(case when id_media = '23' then 1 else 0 end) AS republikaid, 
        SUM(case when id_media = '24' then 1 else 0 end) AS jatengprovgoid, 
        SUM(case when id_media = '25' then 1 else 0 end) AS jatenginewsid, 


        SUM(case when id_media = '26' then 1 else 0 end) AS radarsemarangid, 
        SUM(case when id_media = '27' then 1 else 0 end) AS wwwgatracom, 
        SUM(case when id_media = '28' then 1 else 0 end) AS wwwtvonenewscom, 
        SUM(case when id_media = '29' then 1 else 0 end) AS NJTNews, 
        SUM(case when id_media = '30' then 1 else 0 end) AS wwwjatengnetworkcom, 
        SUM(case when id_media = '31' then 1 else 0 end) AS mercusuarcom, 
        SUM(case when id_media = '32' then 1 else 0 end) AS jatengsuaracom, 

        SUM(case when id_media = '33' then 1 else 0 end) AS indonesiakinigoid, 
        SUM(case when id_media = '34' then 1 else 0 end) AS satumenitnews, 
        SUM(case when id_media = '35' then 1 else 0 end) AS repjogjarepublikadotcoid, 
        SUM(case when id_media = '36' then 1 else 0 end) AS republika_co_id, 
        SUM(case when id_media = '37' then 1 else 0 end) AS jateng_tribbunnewscom, 
        SUM(case when id_media = '38' then 1 else 0 end) AS wisatakublog, 
        SUM(case when id_media = '49' then 1 else 0 end) AS kompascom, 
        SUM(case when id_media = '40' then 1 else 0 end) AS bidikekspresiid, 
        SUM(case when id_media = '41' then 1 else 0 end) AS jateng_inews_id, 
        SUM(case when id_media = '42' then 1 else 0 end) AS Suara_merdeka, 
        SUM(case when id_media = '43' then 1 else 0 end) AS www_republikaindonesia_com, 
        SUM(case when id_media = '44' then 1 else 0 end) AS jateng_suara_com, 
        SUM(case when id_media = '45' then 1 else 0 end) AS detik_com, 
        SUM(case when id_media = '46' then 1 else 0 end) AS tribun_banyumas, 
        SUM(case when id_media = '47' then 1 else 0 end) AS radar_magelang, 
        SUM(case when id_media = '48' then 1 else 0 end) AS wonosobo_ekspres, 
        SUM(case when id_media = '49' then 1 else 0 end) AS jogja_tribunnnews_com, 
        SUM(case when id_media = '50' then 1 else 0 end) AS wisata_news, 
        SUM(case when id_media = '51' then 1 else 0 end) AS wonosobo_wni_or_id, 
        SUM(case when id_media = '52' then 1 else 0 end) AS metroTV, 
        SUM(case when id_media = '53' then 1 else 0 end) AS Tribunnews, 
        SUM(case when id_media = '54' then 1 else 0 end) AS medocom_id, 
        SUM(case when id_media = '55' then 1 else 0 end) AS www_antaranews_com, 
        SUM(case when id_media = '56' then 1 else 0 end) AS Kedaulatan_rakyat 
        
        FROM `berita`";
        return $this->db->query($query)->result();



        // return $this->db->query("SELECT * FROM (SELECT a.*, b.* FROM
        //                         (SELECT * FROM media) as a left join
        //                         (SELECT id_media as id_media_berita, count(nama_media) as jumlah_media FROM berita GROUP BY id_media) as b on a.id_media=b.id_media_berita) as c 
        //                         ORDER BY c.jumlah_media DESC");

        // return $this->db->query($query)->result();
        // return $this->db->query("SELECT count(nama_media) as jumlah_media, nama_media as nama_media, 	
        // FROM berita left join
        // GROUP BY nama_media 
        // ORDER BY jumlah_media DESC");
        // SUM(case when sentimen like 'netral' then 1 else 0 end) AS netral,
        // SUM(case when sentimen like 'positif' then 1 else 0 end) AS positif ,
        // SUM(case when sentimen like 'negatif' then 1 else 0 end) AS negatif 
    }
    public function get_sentimen()
    {
        $query = "SELECT SUM(case when sentimen like 'netral' then 1 else 0 end) AS netral, 
          SUM(case when sentimen like 'positif' then 1 else 0 end) AS positif,
          SUM(case when sentimen like 'negatif' then 1 else 0 end) AS negatif
          FROM `berita`";

        return $this->db->query($query)->result();
    }
public function get_sentimen_netral()
    {
        $query = "SELECT SUM(case when sentimen like 'netral' then 1 else 0 end) AS netral
          FROM `berita`";

        return $this->db->query($query)->result();
    }
public function get_sentimen_positif()
    {
        $query = "SELECT 
          SUM(case when sentimen like 'positif' then 1 else 0 end) AS positif
          
          FROM `berita`";

        return $this->db->query($query)->result();
    }
public function get_sentimen_negatif()
    {
        $query = "SELECT SUM(case when sentimen like 'negatif' then 1 else 0 end) AS negatif
          FROM `berita`";

        return $this->db->query($query)->result();
    }

public function get_sentimen_netral_perbulan($tahun=null)
    {
        for ($bulan=1; $bulan < 13; $bulan++) {
            $this->db->select('*');
            $this->db->where('MONTH(tanggal)',$bulan);
            $this->db->where('sentimen','netral');

            if ($tahun == null) {
                $this->db->where('YEAR(tanggal)',date('Y'));
            } else {
                $this->db->where('YEAR(tanggal)',$tahun);
            }

            $result[] = $this->db->get('berita')->num_rows();
        }
        return $result;
        
    }

public function get_sentimen_positif_perbulan($tahun=null)
    {
        for ($bulan=1; $bulan < 13; $bulan++) {
            $this->db->select('*');
            $this->db->where('MONTH(tanggal)',$bulan);
            $this->db->where('sentimen','positif');

            if ($tahun == null) {
                $this->db->where('YEAR(tanggal)',date('Y'));
            } else {
                $this->db->where('YEAR(tanggal)',$tahun);
            }

            $result[] = $this->db->get('berita')->num_rows();
        }
        return $result;
        // $query = "SELECT COUNT(tanggal) as jumlah, month(tanggal) as bulan FROM `berita` GROUP BY month(tanggal) ORDER BY bulan ASC";
        // return $this->db->query($query)->result();
    }

public function get_sentimen_negatif_perbulan($tahun=null)
    {
        for ($bulan=1; $bulan < 13; $bulan++) {
            $this->db->select('*');
            $this->db->where('MONTH(tanggal)',$bulan);
            $this->db->where('sentimen','negatif');

            if ($tahun == null) {
                $this->db->where('YEAR(tanggal)',date('Y'));
            } else {
                $this->db->where('YEAR(tanggal)',$tahun);
            }

            $result[] = $this->db->get('berita')->num_rows();
        }
        return $result;
        // $query = "SELECT COUNT(tanggal) as jumlah, month(tanggal) as bulan FROM `berita` GROUP BY month(tanggal) ORDER BY bulan ASC";
        // return $this->db->query($query)->result();
    }

public function get_jumlah_indikator(){
        return $this->db->query("SELECT count(id_berita) as jumlah, month(tanggal) as bulan FROM berita GROUP BY bulan ORDER BY bulan ASC");
    }


public function get_media_teratas(){
    return $this->db->query("SELECT count(nama_media) as jumlah_media, nama_media as nama_media, 	
    SUM(case when sentimen like 'netral' then 1 else 0 end) AS netral,
    SUM(case when sentimen like 'positif' then 1 else 0 end) AS positif ,
    SUM(case when sentimen like 'negatif' then 1 else 0 end) AS negatif 
    FROM berita 
    GROUP BY nama_media 
    ORDER BY jumlah_media DESC LIMIT 10");
}





}