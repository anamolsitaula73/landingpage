
<style>


/* Comparison Table Wrapper */
.comparison-table-wrapper {
    width: 80%;
    overflow-x: auto;
    margin: auto;
}

/* Comparison Table Styling */
.comparison-table {
    width: 100%;
    border-collapse: collapse;
    text-align: center;
    font-family: Arial, sans-serif;
    /* border: 1px solid #ddd; */
}

/* Table Header */
.comparison-table thead th {
    color: black;
    padding: 12px 15px;
    position: sticky;
    border-bottom: 3px solid #164193;
    top: 0;
    z-index: 2;
}

/* Company Logo Styling */
.company-logo {
    width: 120px;
    height: auto;
    display: block;
    margin: 0 auto;
}

/* Table Body Rows */
.comparison-table tbody td {
    padding: 10px 15px;
    color: #333;
    /* border: 1px solid #ddd; */

}
.comparison-table th, 
.comparison-table td {
    border-bottom: 1px solid #ddd;
    border-right: 1px solid #ddd;
}

/* Remove Border from Last Column */
.comparison-table th:last-child, 
.comparison-table td:last-child {
    border-right: none;
}

/* Remove Bottom Border from Last Row */
.comparison-table tbody tr:last-child td {
    border-bottom: none;
}

/* Green Tick Mark Styling */
.comparison-table .tick {
    color: #28a745; /* Green color */
    font-size: 1.2em;
    font-weight: bold;
}

/* Highlight eZone Books Column */
.comparison-table tbody td:nth-child(2) {
    background-color: #fff7e6;
}

/* Limited Text Style */
.comparison-table tbody td {
    color: black;
    /* font-weight: bold; */
}

/* Hover Effects */
.comparison-table tbody tr:hover {
    background-color: #f9f9f9;
}

</style>
<div class="comparison-table-wrapper">
  <table class="comparison-table">
    <thead>
      <tr >
        <th ><h2 ><span style="color:black;">Features</span></h2></th>
        <th>
          <img src="assets/images/ii.png" alt="eAccounting" class="company-logo">
        </th>
        <th>
          <img src="assets/images/intuit.png" alt="QuickBooks" class="company-logo">
        </th>
        <th>
          <img src="assets/images/xero.png" alt="Xero" class="company-logo">
        </th>
        <th>
          <img src="assets/images/freshbooks.png" alt="FreshBooks" class="company-logo">
        </th>
        <th>
          <img src="assets/images/sage.png" alt="Sage" class="company-logo">
        </th>
        <th>
          <img src="assets/images/netsuite.png" alt="NetSuite" class="company-logo">
        </th>
        <th>
          <img src="assets/images/zoho.png" alt="Zoho Books" class="company-logo">
        </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Core cloud accounting features</td>
        <td class="tick">✔</td>
        <td class="tick">✔</td>
        <td class="tick">✔</td>
        <td class="tick">✔</td>
        <td class="tick">✔</td>
        <td class="tick">✔</td>
        <td class="tick">✔</td>
      </tr>
      <tr>
        <td>US-based support</td>
        <td class="tick">✔</td>
        <td class="tick">✔</td>
        <td class="tick">✔</td>
        <td class="tick">✔</td>
        <td class="tick">✔</td>
        <td class="tick">✔</td>
        <td class="tick">✔</td>
      </tr>
      <tr>
        <td>Audit trails</td>
        <td class="tick">✔</td>
        <td class="tick">✔</td>
        <td class="tick">✔</td>
        <td class="tick"></td>
        <td class="tick">✔</td>
        <td class="tick">✔</td>
        <td class="tick"></td>
      </tr>
      <tr>
        <td>Free bank feeds</td>
        <td class="tick">✔</td>
        <td class="tick">✔</td>
        <td>Limited</td>
        <td class="tick">✔</td>
        <td class="tick"></td>
        <td class="tick"></td>
        <td>Limited</td>
      </tr>
      <tr>
        <td>Unlimited users</td>
        <td class="tick">✔</td>
        <td>Limited</td>
        <td class="tick"></td>
        <td></td>
        <td class="tick"></td>
        <td></td>
        <td class="tick"></td>
      </tr>
      <tr>
        <td>Unlimited transactions & chart of accounts</td>
        <td class="tick">✔</td>
        <td class="tick"></td>
        <td class="tick"></td>
        <td class="tick"></td>
        <td>Limited</td>
        <td class="tick"></td>
        <td class="tick"></td>
      </tr>
      <tr>
        <td>Run reports</td>
        <td class="tick">✔</td>
        <td class="tick"></td>
        <td class="tick"></td>
        <td class="tick">✔</td>
        <td class="tick"></td>
        <td class="tick"></td>
        <td>Limited</td>
      </tr>
      <tr>
        <td>Multiple users</td>
        <td class="tick">✔</td>
        <td >Limited</td>
        <td class="tick"></td>
        <td class="tick">✔</td>
        <td class="tick"></td>
        <td class="tick"></td>
        <td></td>
      </tr>
      
      <td>Track Inventory</td>
        <td class="tick">✔</td>
        <td class="tick">✔</td>
        <td class="tick"></td>
        <td >Limited</td>
        <td class="tick">✔</td>
        <td class="tick">✔</td>
        <td></td>
      </tr>
      <td>Enter Time</td>
        <td class="tick">✔</td>
        <td class="tick"></td>
        <td class="tick">✔</td>
        <td class="tick">✔</td>
        <td class="tick"></td>
        <td class="tick">✔</td>
        <td></td>
      </tr>
      
    </tbody>
  </table>
</div>
