import React from 'react';

const RoamHorizonAdminDashboard = () => {
  // Sample data
  const stats = [
    { title: 'Total Bookings', value: 1245 },
    { title: 'Active Trips', value: 48 },
    { title: 'Revenue', value: '$12,340' }
  ];

  const customers = [
    { id: 1, name: 'Juan Dela Cruz', email: 'juan@email.com', bookings: 5 },
    { id: 2, name: 'Maria Santos', email: 'maria@email.com', bookings: 2 }
  ];

  const trips = [
    { id: 1, name: 'Boracay Adventure', price: '$500', slots: 10 },
    { id: 2, name: 'Palawan Explorer', price: '$700', slots: 8 }
  ];

  const bookings = [
    { id: 1, customer: 'Juan Dela Cruz', trip: 'Boracay Adventure', status: 'Confirmed' },
    { id: 2, customer: 'Maria Santos', trip: 'Palawan Explorer', status: 'Pending' }
  ];

  const payments = [
    { id: 1, customer: 'Juan Dela Cruz', amount: '$500', status: 'Paid' },
    { id: 2, customer: 'Maria Santos', amount: '$700', status: 'Pending' }
  ];

  const adminUsers = [
    { id: 1, name: 'Admin 1', email: 'admin1@roamhorizon.com', role: 'Super Admin' },
    { id: 2, name: 'Admin 2', email: 'admin2@roamhorizon.com', role: 'Staff' }
  ];

  // State for current section
  const [currentSection, setCurrentSection] = React.useState('dashboard');

  // Render section
  const renderSection = () => {
    switch (currentSection) {
      case 'dashboard':
        return (
          <div className="p-6">
            <h2 className="text-2xl font-bold mb-6">Dashboard</h2>
            <div className="grid grid-cols-1 md:grid-cols-3 gap-6">
              {stats.map((stat, i) => (
                <div key={i} className="bg-white shadow rounded p-6">
                  <h3 className="text-lg font-semibold text-gray-700">{stat.title}</h3>
                  <p className="text-2xl font-bold text-blue-700">{stat.value}</p>
                </div>
              ))}
            </div>
          </div>
        );
      case 'customers':
        return (
          <div className="p-6">
            <h2 className="text-2xl font-bold mb-6">Customers</h2>
            <table className="min-w-full bg-white shadow rounded-lg">
              <thead>
                <tr>
                  <th className="px-6 py-3 border-b-2 border-gray-300 text-left">Name</th>
                  <th className="px-6 py-3 border-b-2 border-gray-300 text-left">Email</th>
                  <th className="px-6 py-3 border-b-2 border-gray-300 text-left">Bookings</th>
                </tr>
              </thead>
              <tbody>
                {customers.map((c) => (
                  <tr key={c.id}>
                    <td className="px-6 py-4 border-b border-gray-300">{c.name}</td>
                    <td className="px-6 py-4 border-b border-gray-300">{c.email}</td>
                    <td className="px-6 py-4 border-b border-gray-300">{c.bookings}</td>
                  </tr>
                ))}
              </tbody>
            </table>
          </div>
        );
      case 'trips':
        return (
          <div className="p-6">
            <h2 className="text-2xl font-bold mb-6">Trips</h2>
            <table className="min-w-full bg-white shadow rounded-lg">
              <thead>
                <tr>
                  <th className="px-6 py-3 border-b-2 border-gray-300 text-left">Name</th>
                  <th className="px-6 py-3 border-b-2 border-gray-300 text-left">Price</th>
                  <th className="px-6 py-3 border-b-2 border-gray-300 text-left">Slots</th>
                </tr>
              </thead>
              <tbody>
                {trips.map((t) => (
                  <tr key={t.id}>
                    <td className="px-6 py-4 border-b border-gray-300">{t.name}</td>
                    <td className="px-6 py-4 border-b border-gray-300">{t.price}</td>
                    <td className="px-6 py-4 border-b border-gray-300">{t.slots}</td>
                  </tr>
                ))}
              </tbody>
            </table>
          </div>
        );
      case 'bookings':
        return (
          <div className="p-6">
            <h2 className="text-2xl font-bold mb-6">Bookings</h2>
            <table className="min-w-full bg-white shadow rounded-lg">
              <thead>
                <tr>
                  <th className="px-6 py-3 border-b-2 border-gray-300 text-left">Customer</th>
                  <th className="px-6 py-3 border-b-2 border-gray-300 text-left">Trip</th>
                  <th className="px-6 py-3 border-b-2 border-gray-300 text-left">Status</th>
                </tr>
              </thead>
              <tbody>
                {bookings.map((b) => (
                  <tr key={b.id}>
                    <td className="px-6 py-4 border-b border-gray-300">{b.customer}</td>
                    <td className="px-6 py-4 border-b border-gray-300">{b.trip}</td>
                    <td className="px-6 py-4 border-b border-gray-300">{b.status}</td>
                  </tr>
                ))}
              </tbody>
            </table>
          </div>
        );
      case 'payments':
        return (
          <div className="p-6">
            <h2 className="text-2xl font-bold mb-6">Payments</h2>
            <table className="min-w-full bg-white shadow rounded-lg">
              <thead>
                <tr>
                  <th className="px-6 py-3 border-b-2 border-gray-300 text-left">Customer</th>
                  <th className="px-6 py-3 border-b-2 border-gray-300 text-left">Amount</th>
                  <th className="px-6 py-3 border-b-2 border-gray-300 text-left">Status</th>
                </tr>
              </thead>
              <tbody>
                {payments.map((p) => (
                  <tr key={p.id}>
                    <td className="px-6 py-4 border-b border-gray-300">{p.customer}</td>
                    <td className="px-6 py-4 border-b border-gray-300">{p.amount}</td>
                    <td className="px-6 py-4 border-b border-gray-300">{p.status}</td>
                  </tr>
                ))}
              </tbody>
            </table>
          </div>
        );
      case 'analytics':
        return (
          <div className="p-6">
            <h2 className="text-2xl font-bold mb-6">Analytics</h2>
            <div className="bg-white shadow rounded-lg p-6">
              <p>Revenue: $12,340</p>
              <p>Total Bookings: 1245</p>
              <p>Active Customers: 48</p>
            </div>
          </div>
        );
      case 'admin-tools':
        return (
          <div className="p-6">
            <h2 className="text-2xl font-bold mb-6">Admin Tools</h2>
            <table className="min-w-full bg-white shadow rounded-lg">
              <thead>
                <tr>
                  <th className="px-6 py-3 border-b-2 border-gray-300 text-left">Name</th>
                  <th className="px-6 py-3 border-b-2 border-gray-300 text-left">Email</th>
                  <th className="px-6 py-3 border-b-2 border-gray-300 text-left">Role</th>
                </tr>
              </thead>
              <tbody>
                {adminUsers.map((u) => (
                  <tr key={u.id}>
                    <td className="px-6 py-4 border-b border-gray-300">{u.name}</td>
                    <td className="px-6 py-4 border-b border-gray-300">{u.email}</td>
                    <td className="px-6 py-4 border-b border-gray-300">{u.role}</td>
                  </tr>
                ))}
              </tbody>
            </table>
          </div>
        );
      default:
        return <div>Section not found</div>;
    }
  };

  return (
    <div className="flex h-screen bg-gray-50">
      <nav className="w-64 bg-blue-800 text-white p-4">
        <div className="mb-8">
          <h2 className="text-2xl font-bold">RoamHorizon</h2>
        </div>
        <ul>
          <li className="mb-2">
            <button onClick={() => setCurrentSection('dashboard')} className="block p-2 hover:bg-blue-700 rounded w-full text-left">
              Dashboard
            </button>
          </li>
          <li className="mb-2">
            <button onClick={() => setCurrentSection('customers')} className="block p-2 hover:bg-blue-700 rounded w-full text-left">
              Customers
            </button>
          </li>
          <li className="mb-2">
            <button onClick={() => setCurrentSection('trips')} className="block p-2 hover:bg-blue-700 rounded w-full text-left">
              Trips
            </button>
          </li>
          <li className="mb-2">
            <button onClick={() => setCurrentSection('bookings')} className="block p-2 hover:bg-blue-700 rounded w-full text-left">
              Bookings
            </button>
          </li>
          <li className="mb-2">
            <button onClick={() => setCurrentSection('payments')} className="block p-2 hover:bg-blue-700 rounded w-full text-left">
              Payments
            </button>
          </li>
          <li className="mb-2">
            <button onClick={() => setCurrentSection('analytics')} className="block p-2 hover:bg-blue-700 rounded w-full text-left">
              Analytics
            </button>
          </li>
          <li className="mb-2">
            <button onClick={() => setCurrentSection('admin-tools')} className="block p-2 hover:bg-blue-700 rounded w-full text-left">
              Admin Tools
            </button>
          </li>
        </ul>
      </nav>
      <div className="flex-1 overflow-auto">
        <header className="bg-white shadow p-4">
          <h1 className="text-xl font-bold">RoamHorizon Travels Admin Dashboard</h1>
        </header>
        <main>
          {renderSection()}
        </main>
      </div>
    </div>
  );
};

export default RoamHorizonAdminDashboard;
